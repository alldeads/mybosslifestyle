<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('one-page', [
            'products' => Product::all(),
            'rewards' => Item::all()
        ]);
    }

    public function dashboard()
    {
        $setting = Setting::all()->first();

        return view('dashboard', compact('setting'));
    }
}
