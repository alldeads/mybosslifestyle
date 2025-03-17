<?php

namespace App\Filament\Resources\PointHistoryResource\Pages;

use App\Filament\Resources\PointHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePointHistories extends ManageRecords
{
    protected static string $resource = PointHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
