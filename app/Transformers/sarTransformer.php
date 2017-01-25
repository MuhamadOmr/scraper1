<?php
/**
 * Created by PhpStorm.
 * User: MUHAMAD
 * Date: 01/25/2017
 * Time: 9:37 AM
 */

namespace app\Transformers;


use App\Sar;
use League\Fractal\TransformerAbstract;

class sarTransformer extends TransformerAbstract
{

    public function transform(Sar $sar){

        return [

            'Buy Price'=>$sar->buyPrice,

            'Sell Price'=>$sar->sellPrice,

            'Updated At'=>$sar->updated_at->diffForHumans(),


        ];
    }

}