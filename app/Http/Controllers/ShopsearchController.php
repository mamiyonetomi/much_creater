<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopsearchController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('shopsearch');
    }
}
