<?php

namespace App\Http\Controllers;

use Dotenv\Regex\Result;
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
        $result = Result::paginate(10);
        return view('result');
    }
}