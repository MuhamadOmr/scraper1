<?php
/**
 * Created by PhpStorm.
 * User: MUHAMAD
 * Date: 01/25/2017
 * Time: 9:20 AM
 */

namespace App\Transformers;

use App\Bank;
use League\Fractal\TransformerAbstract;


class banksTransformer extends TransformerAbstract
{

    protected $defaultIncludes = ['dollar' , 'euro' , 'sar'];

    public function transform (Bank $bank){

        return [

            'arabic Bank Name'=>$bank->nameAR,

            'English Bank Name'=>$bank->nameENG,
        ];


    }

    public function includeDollar(Bank $bank){

        return $this->item($bank->dollar , new dollarTransformer);

    }


    public function includeEuro(Bank $bank){

        return $this->item($bank->euro , new euroTransformer);

    }


    public function includeSar(Bank $bank){

        return $this->item($bank->sar , new sarTransformer);

    }



}