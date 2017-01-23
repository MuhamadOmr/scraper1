<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Euro extends Model
{
    //


    protected $fillable = [

        'buyPrice',
        'sellPrice',


    ];

    public function bank (){

        return $this->belongsTo('App\Bank');
    }

}
