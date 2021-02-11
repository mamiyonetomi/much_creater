<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //Serviceとの紐づけ(1対多)
    public function services()
    {

    return $this->hasMary('App\Service');
    }
}
