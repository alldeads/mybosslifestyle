<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EncashResource\Pages;
use App\Filament\Resources\EncashResource\RelationManagers;
use App\Models\Encash;
use App\Models\User;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EncashResource extends Resource
{
    protected static ?string $model = Encash::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static bool $isDiscovered = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                    ->label('User')
                    ->options(User::all()->pluck('name', 'id'))
                    ->searchable()
                    ->columnSpan(2),
                Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'fulfilled' => 'Fulfilled',
                        'cancelled' => 'Cancelled',
                        'hold' => 'Hold',
                    ])
                    ->required(),
                TextInput::make('rebates')
                    ->required()
                    ->rules([
                        fn(): Closure => function (string $attribute, $value, Closure $fail) {
                            if ($value < 500) {
                                $fail('The :attribute is less than 500.');
                            }
                        },
                    ])
                    ->hiddenOn('edit')
                    ->numeric()
                    ->default(0)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rebates')->label('Claimed Rebates'),
                Tables\Columns\TextColumn::make('status')
                    ->color(fn(string $state): string => match ($state) {
                        'pending' => 'warning',
                        'fulfilled' => 'success',
                        'cancelled' => 'danger',
                        'hold' => 'primary',
                    }),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageEncashes::route('/'),
        ];
    }
}
