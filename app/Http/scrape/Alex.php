<?php
namespace App\Http\scrape;
use App\Bank;
use Goutte\Client;

use Illuminate\Database\Eloquent\Model;

class Alex implements bankInterface {

    // This class return array of the the prices in array of prices [] []


    public $bankID = 4;

    public function scrape(){


        $client = new Client();

        // Go to the symfony.com website
        $crawler = $client->request('GET', 'https://www.alexbank.com/En/Home/ExchangeRates');

        $data[0][0] = $crawler->filter('.tabella-sp')->filter('tr')->filter('td')->eq(6)->text();

        $data[0][0] = (float) filter_var( $data[0][0], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );

        $data[0][1] = $crawler->filter('.tabella-sp')->filter('tr')->filter('td')->eq(7)->text();
        $data[0][1] = (float) filter_var( $data[0][1], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );

        $data[1][0] = $crawler->filter('.tabella-sp')->filter('tr')->filter('td')->eq(86)->text();
        $data[1][0] = (float) filter_var( $data[1][0], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );

        $data[1][1] = $crawler->filter('.tabella-sp')->filter('tr')->filter('td')->eq(87)->text();
        $data[1][1] = (float) filter_var(  $data[1][1], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );

        $data[2][0] = $crawler->filter('.tabella-sp')->filter('tr')->filter('td')->eq(31)->text();
        $data[2][0] = (float) filter_var( $data[2][0], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );

        $data[2][1] = $crawler->filter('.tabella-sp')->filter('tr')->filter('td')->eq(32)->text();
        $data[2][1] = (float) filter_var( $data[2][1], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );

        return $data;


        // USE Multi-dimesional array to access and perform changes on the value
       // array_walk_recursive($data,array($this, 'cube'));

       // $data = array_map(array($this, 'cube'), $data);

//        foreach ($data as $row) {
//           $ndata[][] = (float) filter_var( $row[0][0], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );
//            $ndata[][] = (float) filter_var( $row[0][1], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );
//        }


    }


//
//
//    function cube(&$n,$key)
//    {
//        return (float) filter_var( $n, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );
//    }

}