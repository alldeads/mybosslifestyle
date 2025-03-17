<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PointHistoryResource\Pages;
use App\Filament\Resources\PointHistoryResource\RelationManagers;
use App\Models\PointHistory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PointHistoryResource extends Resource
{
    protected static ?string $model = PointHistory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Transactions';

    protected static ?string $label = 'Points Transactions';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('reference_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('user_id')
                    ->numeric(),
                Forms\Components\TextInput::make('created_by')
                    ->numeric(),
                Forms\Components\TextInput::make('points')
                    ->numeric(),
                Forms\Components\TextInput::make('running')
                    ->numeric(),
                Forms\Components\TextInput::make('description')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('reference_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.id')
                    ->label('User ID')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                // Tables\Columns\TextColumn::make('created_by')
                //     ->numeric()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('points')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('running')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('stockist.name')
                    ->label('Stockist')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ]);
            // ->bulkActions([
            //     Tables\Actions\BulkActionGroup::make([
            //         Tables\Actions\DeleteBulkAction::make(),
            //     ]),
            // ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePointHistories::route('/'),
        ];
    }
}
