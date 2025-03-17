<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionResource\Pages;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\Model;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Transactions';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->label('User')
                    ->options(fn() => User::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required()
                    ->columnSpan(2),

                Repeater::make('items')
                    ->schema([
                        Select::make('product_id')
                            ->label('Product')
                            ->options(fn() => Product::pluck('name', 'id'))
                            ->searchable()
                            ->reactive()
                            ->afterStateUpdated(
                                fn($state, callable $set) =>
                                $set('price', Product::find($state)?->dprice ?? 0)
                            )
                            ->columnSpan(2),
                        TextInput::make('price')
                            ->required()
                            ->numeric()
                            ->readOnly(),
                        TextInput::make('quantity')
                            ->required()
                            ->numeric()
                            ->live()
                            ->afterStateUpdated(fn ($state, Set $set, Get $get) => 
                                $set('../../total', ($get('price') ?? 0) * $state)
                            ),
                    ])
                    ->minItems(1)
                    ->columnSpan(2),

                Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'paid' => 'Paid',
                        'cancelled' => 'Cancelled',
                        'hold' => 'Hold',
                    ]),
                Forms\Components\TextInput::make('total')
                    ->required()
                    ->readOnly()
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
                Tables\Columns\TextColumn::make('points'),
                Tables\Columns\TextColumn::make('status')
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'paid' => 'success',
                        'cancelled' => 'danger',
                        'hold' => 'primary',
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ManageTransactions::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ])
            ->orderBy('created_at', 'desc');
    }
}
