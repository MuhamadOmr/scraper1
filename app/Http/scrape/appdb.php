<?php
/**
 * Created by PhpStorm.
 * User: MUHAMAD
 * Date: 01/20/2017
 * Time: 2:46 PM
 */

namespace App\Http\scrape;

use App\Bank;
use App\Dollar ;
use App\Euro;
use App\Sar;
use Illuminate\Support\Facades\DB;

class appdb
{

    /**
     * @param bankInterface $bank
     */

    public function updateDB(bankInterface $bank){

        $data = $bank->scrape();


        $price =Dollar::where('Bank_Id',$bank->bankID)->first();
        $price->buyPrice = $data[0][0];
        $price->sellPrice = $data[0][1];
        $price->save();

        $priceEUR =Euro::where('Bank_Id',$bank->bankID)->first();
        $priceEUR->buyPrice = $data[1][0];
        $priceEUR->sellPrice = $data[1][1];
        $priceEUR->save();


        $priceSAR =Sar::where('Bank_Id',$bank->bankID)->first();
        $priceSAR->buyPrice = $data[2][0];
        $priceSAR->sellPrice = $data[2][1];
        $priceSAR->save();

    }











}