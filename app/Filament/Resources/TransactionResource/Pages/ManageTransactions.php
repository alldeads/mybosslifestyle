<?php

namespace App\Filament\Resources\TransactionResource\Pages;

use App\Filament\Resources\TransactionResource;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Database\Eloquent\Model;

class ManageTransactions extends ManageRecords
{
    protected static string $resource = TransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->using(function (array $data, string $model): Model {
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

                    $data['reference_id'] = uniqid('PO-');

                    User::triggerPassUp($data['user_id'], $data['quantity'] ?? 1);

                    return $model::create($data);
                }),
        ];
    }
}
