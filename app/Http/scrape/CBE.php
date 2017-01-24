<?php
/**
 * Created by PhpStorm.
 * User: MUHAMAD
 * Date: 01/24/2017
 * Time: 8:10 AM
 */

namespace App\Http\scrape;

use App\Bank;
use Goutte\Client;

use Illuminate\Database\Eloquent\Model;

class CBE implements bankInterface {


    public $bankID = 3;

    public function scrape(){


        $client = new Client();

        // Go to the symfony.com website
        $crawler = $client->request('GET', 'http://www.cbe.org.eg/en/EconomicResearch/Statistics/Pages/ExchangeRatesListing.aspx');



        $data[0][0] = $crawler->filter('.table')->filter('tr')->filter('td')->eq(1)->text();

        $data[0][1] = $crawler->filter('.table')->filter('tr')->filter('td')->eq(2)->text();


        $data[1][0] = $crawler->filter('.table')->filter('tr')->filter('td')->eq(4)->text();


        $data[1][1] = $crawler->filter('.table')->filter('tr')->filter('td')->eq(5)->text();


        $data[2][0] = $crawler->filter('.table')->filter('tr')->filter('td')->eq(16)->text();


        $data[2][1] = $crawler->filter('.table')->filter('tr')->filter('td')->eq(17)->text();

        return $data;

    }




}