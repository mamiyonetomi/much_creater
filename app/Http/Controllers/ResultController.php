<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Show the application dashboard.
     *
     */
    public function index(Request $request)
    {
        $query = Shop::query();
        if ($request->address1) {
            $query->where('address1', '=', $request->address1);
        }
        if ($request->address2) {
            $query->where('address2', '=', $request->address2);
        }
        if($request->service){
            $query->whereHas('services',function($query) use($request){
            $query->whereIn('item_id',$request->service);
            });
    } else {
        $query->whereHas('services', function($query) use($request){
            $query->whereHas('item', function($query) use($request){
                $query->where('item_no', '=', $request->item); 
            });
        });
    }

        $shops=$query->paginate(10);
        return view('result',compact('shops'));
    }
}