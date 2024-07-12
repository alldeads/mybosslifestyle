<?php

namespace App\Filament\Resources\UserResource\Pages;

use Str;
use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class ManageUsers extends ManageRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->using(function (array $data, string $model): Model {
                    $data['username'] = strtolower("{$data['first_name']}.{$data['last_name']}") . rand(10, 1000);
                    $data['referral'] = strtoupper(Str::random(7));
                    $data['is_admin'] = false;
                    $data['password'] = Hash::make('password');
                    return $model::create($data);
                }),
        ];
    }
}
