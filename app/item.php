<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //Serviceとの紐づけ(1対多)
    public function services()
    {
        return $this->hasMany('App\Service');
    }
}