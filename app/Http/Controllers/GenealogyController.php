<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenealogyController extends Controller
{
    public function index()
    {
        $downlines = auth()->user()->network();

        return view('genealogy', compact('downlines'));
    }
}
