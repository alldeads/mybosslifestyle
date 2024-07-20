<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
use App\Rules\StockistPointsRule;
use Illuminate\Http\Request;

class StockistController extends Controller
{
    public function index()
    {
        $transactions = Transaction::where('stockist_id', auth()->id())
                    ->orderBy('id', 'desc')->get();

        return view('stockist', compact('transactions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'account_number' => ['required', 'numeric', 'exists:codes,code'],
            'points' => ['required', 'numeric', new StockistPointsRule],
        ]);

        $currentPoints = auth()->user()->stockist_points;

        $user = User::where('account_number', $request->account_number)->first();

        auth()->user()->update([
            'stockist_points' => $currentPoints - $request->points
        ]);

        Transaction::create([
            'reference_id' => uniqid(),
            'user_id' => $user->id ?? 1,
            'total' => 0,
            'quantity' => $request->points,
            'payment_method' => 'cash upon pick up',
            'points' => $request->points,
            'status' => 'paid',
            'items' => [],
            'stockist_id' => auth()->id()
        ]);

        return redirect()->route('stockist');
    }
}
