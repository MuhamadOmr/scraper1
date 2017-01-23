<?php
namespace App\Http\scrape;
use App\Bank;
use Goutte\Client;

use Illuminate\Database\Eloquent\Model;

class aaib implements bankInterface {

    // This class return array of the the prices in array of prices [] []


public $bankID = 1;

    public function scrape(){


        $client = new Client();

        // Go to the symfony.com website
        $crawler = $client->request('GET', 'http://aaib.com/services/rates');

        $data[0][0] = $crawler->filter('#rates-table')->filter('tr')->filter('td')->eq(1)->text();

        $data[0][1] = $crawler->filter('#rates-table')->filter('tr')->filter('td')->eq(2)->text();


        $data[1][0] = $crawler->filter('#rates-table')->filter('tr')->filter('td')->eq(4)->text();


        $data[1][1] = $crawler->filter('#rates-table')->filter('tr')->filter('td')->eq(5)->text();


        $data[2][0] = $crawler->filter('#rates-table')->filter('tr')->filter('td')->eq(19)->text();


        $data[2][1] = $crawler->filter('#rates-table')->filter('tr')->filter('td')->eq(20)->text();

        return $data;

    }

}