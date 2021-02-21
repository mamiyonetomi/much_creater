<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ShopsearchController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Item::all();
        return view('shopsearch', compact('items'));
    }
}
