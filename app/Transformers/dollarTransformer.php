<?php
/**
 * Created by PhpStorm.
 * User: MUHAMAD
 * Date: 01/25/2017
 * Time: 9:24 AM
 */

namespace app\Transformers;


use App\Dollar;
use League\Fractal\TransformerAbstract;

class dollarTransformer extends TransformerAbstract
{

    public function transform (Dollar $dollar){

        return [
            'Buy Price'=>$dollar->buyPrice,

            'Sell Price'=>$dollar->sellPrice,

            'Updated At'=>$dollar->updated_at->diffForHumans(),


        ];


    }



}