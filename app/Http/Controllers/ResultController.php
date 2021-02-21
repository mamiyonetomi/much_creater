<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $shops=Shop::paginate(10);
        return view('result',compact('shops'));
    }
}