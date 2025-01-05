<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncashController extends Controller
{
    public function index()
    {
        $rebates = auth()->user()->getAvailableRebates();

        return view('encash', compact('rebates'));
    }
}
