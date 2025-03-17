<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Redeem;
use App\Models\User;
use App\Notifications\RedeemNotification;
use Illuminate\Http\Request;
use Filament\Notifications\Notification;

class RewardsController extends Controller
{
    public function index()
    {
        $items = Item::all();

        return view('rewards', compact('items'));
    }

    public function store(Request $request)
    {
        $item = $request->input('reward', null);
        $reward = Item::findOrFail($item);
        $user = auth()->user();

        if (!is_null($reward)) {
            $currentPoints = $user->getAvailablePoints();

            if ($currentPoints >= $reward->points) {
                Redeem::create([
                    'reference_id' => "R-" . uniqid(),
                    'item_id' => $reward->id,
                    'user_id' => auth()->id(),
                    'quantity' => 1,
                    'points' => $reward->points,
                    'status' => 'pending'
                ]);

                $user->update([
                    'claimed_points' => $user->claimed_points + $reward->points
                ]);

                User::admin()->notify(new RedeemNotification([
                    'user' => $user->name,
                    'item' => $reward->name,
                    'points' => $reward->points,
                ]));

                flash()->success("You have successfully redeemed the " . $reward->name);
            } else {
                flash()->error("Insufficient points.");
            }
        }

        return redirect()->route('rewards');
    }

    public function history()
    {
        $histories = auth()->user()->redeems()->orderBy('id', 'desc')->get();

        return view('history', compact('histories'));
    }
}
