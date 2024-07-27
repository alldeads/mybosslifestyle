<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Redeem;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $users = User::where('is_admin', false)->count();
        $transactions = Transaction::where('status', 'paid')->count();
        $products = Product::count();
        $redeems = Redeem::where('status', 'pending')->count();

        // Stats
        $todayPoints = Transaction::where('created_at', '>=', Carbon::today())->sum('points');

        return [
            Card::make('Customers', $users),
            Card::make('Transactions', $transactions),
            Card::make('Products', $products),
            Card::make('Pending Redeems', $redeems),
            Card::make('Today\'s Points', $todayPoints),
        ];
    }
}
