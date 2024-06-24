<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $users = User::where('is_admin', false)->count();
        // $transactions = Transaction::where('status', 'paid')->count();
        $products = Product::count();

        return [
            Card::make('Customers', $users),
            Card::make('Transactions', 0),
            Card::make('Products', $products),
        ];
    }

    protected function getCards(): array
    {
        return [

        ];
    }
}
