<?php

namespace App\Http\Controllers;

use App\Models\PointHistory;
use Illuminate\Http\Request;

class PointHistoryController extends Controller
{
    public function index()
    {
        $items = PointHistory::where('user_id', auth()->id())->orderBy('id', 'desc')->get();

        return view('point-history', compact('items'));
    }
}
