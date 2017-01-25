<?php
/**
 * Created by PhpStorm.
 * User: MUHAMAD
 * Date: 01/25/2017
 * Time: 9:34 AM
 */

namespace app\Transformers;


use App\Euro;
use League\Fractal\TransformerAbstract;

class euroTransformer extends TransformerAbstract
{

    public function transform (Euro $euro){


        return [

            'Buy Price'=>$euro->buyPrice,

            'Sell Price'=>$euro->sellPrice,

            'Updated At'=>$euro->updated_at->diffForHumans(),
        ];


    }

}