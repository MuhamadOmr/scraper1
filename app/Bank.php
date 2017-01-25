<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    //

    protected $fillable = [

        'name',
        'url',


    ];

    public function  dollar (){

        return $this->hasOne('App\Dollar');
    }


    public function  euro (){

        return $this->hasOne('App\Euro');
    }

    public function  sar (){

        return $this->hasOne('App\Sar');
    }
}
