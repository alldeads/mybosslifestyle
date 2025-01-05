<?php

namespace App\Filament\Resources\EncashResource\Pages;

use App\Filament\Resources\EncashResource;
use App\Models\Encash;
use App\Models\User;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Database\Eloquent\Model;

class ManageEncashes extends ManageRecords
{
    protected static string $resource = EncashResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->before(function (Actions\CreateAction $action, $data) {
                    $user = User::find($data['user_id']);

                    $available = $user->getAvailableRebates();

                    if ($available < $data['rebates']) {
                        Notification::make()
                            ->warning()
                            ->title('Insufficient rebates.')
                            ->send();
                        $action->halt();
                    }

                    $data['reference_id'] = uniqid();
                })
                ->after(function (Actions\CreateAction $action, Encash $record) {
                    $user = $record->user;

                    $user->update([
                        'claimed_rebates' => $user->claimed_rebates + $record->rebates
                    ]);
                })
                ->successNotificationTitle('Encash has been successfully processed.'),
        ];
    }
}
