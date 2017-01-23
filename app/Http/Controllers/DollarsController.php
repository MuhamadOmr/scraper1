<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleClient;

use Weidner\Goutte\GoutteFacadeGoutte;

use App\Http\Requests;

class DollarsController extends Controller
{
    //


    public function update (){




        $crawler = Goutte::request('GET', 'http://duckduckgo.com/?q=Laravel');
        $url = $crawler->filter('.result__title > a')->first()->attr('href');


    }
}
