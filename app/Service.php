<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //Shopテーブルとの紐づけ(多対1)
    public function shop()
    {
    return $this->belongsTo('App\Shop');
    }

    //Itemテーブルとの紐づけ(多対1)
    public function item()
    {
    return $this->belongsTo('App\Item');
    }
}
