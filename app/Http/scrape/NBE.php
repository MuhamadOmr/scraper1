<?php
namespace App\Http\scrape;
use App\Bank;
use Goutte\Client;

use Illuminate\Database\Eloquent\Model;

class NBE implements bankInterface {

    // This class return array of the the prices in array of prices [] []


    public $bankID = 5;

    public function scrape(){


        $client = new Client();

        // Go to the symfony.com website
        $crawler = $client->request('GET', 'http://www.nbe.com.eg/en/ExchangeRate.aspx');

        $data[0][0] = $crawler->filter('#dgPrices')->filter('tr')->filter('td')->eq(8)->text();
        $data[0][0] = (float) filter_var( $data[0][0], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );


        $data[0][1] = $crawler->filter('#dgPrices')->filter('tr')->filter('td')->eq(9)->text();
        $data[0][1] = (float) filter_var( $data[0][1], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );

        $data[1][0] = $crawler->filter('#dgPrices')->filter('tr')->filter('td')->eq(14)->text();
        $data[1][0] = (float) filter_var( $data[1][0], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );

        $data[1][1] = $crawler->filter('#dgPrices')->filter('tr')->filter('td')->eq(15)->text();
        $data[1][1] = (float) filter_var( $data[1][1], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );

        $data[2][0] = $crawler->filter('#dgPrices')->filter('tr')->filter('td')->eq(74)->text();
        $data[2][0] = (float) filter_var( $data[2][0], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );

        $data[2][1] = $crawler->filter('#dgPrices')->filter('tr')->filter('td')->eq(75)->text();
        $data[2][1] = (float) filter_var( $data[2][1], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );
//

        return $data;

    }

}