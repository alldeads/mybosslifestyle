<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RedeemResource\Pages;
use App\Models\Redeem;
use App\Models\User;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class RedeemResource extends Resource
{
    protected static ?string $model = Redeem::class;

    protected static ?string $navigationIcon = 'heroicon-o-queue-list';

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
                    ]),
                TextInput::make('points')
                    ->required()
                    ->hiddenOn('edit')
                    ->numeric()
                    ->default(0)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('reference_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('item.name')
                    ->wrap()
                    ->searchable(),
                Tables\Columns\TextColumn::make('points'),
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
            'index' => Pages\ManageRedeems::route('/'),
        ];
    }
}
