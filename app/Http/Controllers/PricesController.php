<?php

namespace App\Http\Controllers;

use App\Bank;

use App\Transformers\banksTransformer;
use Illuminate\Http\Request;

use App\Http\Requests;

class PricesController extends Controller
{
    //

    public function index(){

        $banks = Bank::all();


        return fractal ()
            ->collection($banks)
            ->transformWith(new banksTransformer)
            ->toArray();



    }
}
