<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = auth()->user()->transactions()->orderBy('id', 'desc')->get();

        return view('transaction', compact('transactions'));
    }
}
