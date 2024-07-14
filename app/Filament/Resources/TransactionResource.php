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

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->label('User')
                    ->options(User::all()->pluck('name', 'id'))
                    ->searchable()
                    ->columnSpan(2),
                Repeater::make('items')
                ->schema([
                    Select::make('product_id')
                        ->label('Product')
                        ->options(Product::all()->pluck('name', 'id'))
                        ->searchable()
                        ->columnSpan(2),
                    TextInput::make('price')->required(),
                    TextInput::make('quantity')->required(),
                ])
                ->columnSpan(2),
                Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'paid' => 'Paid',
                        'cancelled' => 'Cancelled',
                        'hold' => 'Hold',
                    ]),
                Forms\Components\TextInput::make('total')
                    ->maxLength(255),
                Forms\Components\TextInput::make('quantity')
                    ->numeric()
                    ->hiddenOn('edit')
                    ->maxLength(255),
                Forms\Components\TextInput::make('points')
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
                Tables\Columns\TextColumn::make('points'),
                Tables\Columns\TextColumn::make('total'),
                Tables\Columns\TextColumn::make('quantity'),
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
                Tables\Actions\EditAction::make()
                    ->using(function (Model $record, array $data): Model {

                        $quantity = 0;
                        $total = 0;
                        $points = 0;

                        if (isset($data['items']) && count($data['items']) > 0) {
                            foreach($data['items'] as $item) {
                                $quantity += $item['quantity'];
                                $total += $item['price'] * $item['quantity'];
                            }

                            $points = $quantity;

                            $data['quantity'] = $quantity;
                            $data['points'] = $points;
                            $data['total'] = $total;
                        }

                        if ($record->status == "pending" && $data['status'] == "paid") {
                            User::triggerPassUp($record->user_id, $data['points'] ?? 1);
                        }

                        $record->update($data);

                        return $record;
                    }),
                Tables\Actions\DeleteAction::make(),
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
