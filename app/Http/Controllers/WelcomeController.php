<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Product;
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
}
