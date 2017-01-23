<?php
/**
 * Created by PhpStorm.
 * User: MUHAMAD
 * Date: 01/20/2017
 * Time: 7:51 PM
 */

namespace App\Http\scrape;
use App\Bank;
use GuzzleHttp\client;
use GuzzleHttp\Psr7\Request;

class CIB implements bankInterface
{

    // This class return array of the the prices in array of prices [] []

    // JSON CIB GETTING THE PRICES VALUES


    public $bankID = 2;



    public function scrape()
    {
        $client = new  Client;

        $response = $client->request('POST', 'http://www.cibeg.com/_layouts/15/LINKDev.CIB.CurrenciesFunds/FundsCurrencies.aspx/GetCurrencies', ['json' => ['lang' => 'en']]);

        $result = json_decode($response->getBody());



        $data[0][0] = $result->d[0]->BuyRate;

        $data[0][1] = $result->d[0]->SellRate;


        $data[1][0] = $result->d[1]->BuyRate;


        $data[1][1] = $result->d[1]->SellRate;


        $data[2][0] =  $result->d[4]->BuyRate;


        $data[2][1] =  $result->d[4]->SellRate;

     return $data;



    }

}