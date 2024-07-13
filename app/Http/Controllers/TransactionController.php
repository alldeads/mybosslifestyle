<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionItem;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = auth()->user()->transactions()->orderBy('id', 'desc')->get();

        return view('transaction', compact('transactions'));
    }

    public function view(Transaction $transaction)
    {
        if (auth()->id() != $transaction->user_id) {
            return redirect()->route('dashboard');
        }

        $items = $transaction->items;

        return view('order-view', compact('transaction', 'items'));
    }
}
