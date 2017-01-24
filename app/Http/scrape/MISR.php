<?php
namespace App\Http\scrape;
use App\Bank;
use Goutte\Client;

use Illuminate\Database\Eloquent\Model;

class MISR implements bankInterface {

    // This class return array of the the prices in array of prices [] []


    public $bankID = 6;

    public function scrape(){


        $client = new Client();

        // Go to the symfony.com website
        $crawler = $client->request('GET', 'http://www.banquemisr.com/en/exchangerates');

        $data[0][0] = $crawler->filter('.tabularData')->filter('tr')->filter('td')->eq(1)->text();


        $data[0][1] = $crawler->filter('.tabularData')->filter('tr')->filter('td')->eq(2)->text();


        $data[1][0] = $crawler->filter('.tabularData')->filter('tr')->filter('td')->eq(6)->text();


        $data[1][1] = $crawler->filter('.tabularData')->filter('tr')->filter('td')->eq(7)->text();


        $data[2][0] = $crawler->filter('.tabularData')->filter('tr')->filter('td')->eq(31)->text();


        $data[2][1] = $crawler->filter('.tabularData')->filter('tr')->filter('td')->eq(32)->text();

        return $data;

    }

}