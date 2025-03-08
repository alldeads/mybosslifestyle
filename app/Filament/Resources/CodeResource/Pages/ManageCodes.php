<?php

namespace App\Filament\Resources\CodeResource\Pages;

use App\Filament\Resources\CodeResource;
use App\Models\User;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ManageRecords;

class ManageCodes extends ManageRecords
{
    protected static string $resource = CodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('generate')
                ->label('Generate Codes')
                ->form([
                    Select::make('digit')
                        ->label('Digit')
                        ->options([
                            4 => 4,
                            5 => 5,
                            6 => 6,
                            7 => 7
                        ])
                        ->required(),
                    Select::make('number')
                        ->label('Number')
                        ->options([20 => 20, 50 => 50])
                        ->required(),
                    Select::make('stockist_id')
                        ->label('Stockist')
                        ->options(User::where('is_stockist', true)->get()->pluck('name', 'id'))
                ])
                ->action(function (array $data): void {
                    $digit = $data['digit'];
                    $number = $data['number'];
                    $stockistId = $data['stockist_id'] ?? null;

                    $codes = [];
                    for ($i = 0; $i < $number; $i++) {
                        do {
                            $code = str_pad(rand(0, pow(10, $digit) - 1), $digit, '0', STR_PAD_LEFT);
                        } while (\App\Models\Code::where('code', $code)->exists()); // Ensure uniqueness

                        $codes[] = [
                            'code' => $code,
                            'stockist_id' => $stockistId,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ];
                    }

                    \App\Models\Code::insert($codes); // Bulk insert for performance

                    Notification::make()
                        ->title("{$number} codes generated successfully.")
                        ->success()
                        ->send();
                })
        ];
    }
}
