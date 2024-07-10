<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class RewardsController extends Controller
{
    public function index()
    {
        $items = Item::all();

        return view('rewards', compact('items'));
    }
}
