<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Http\scrape\AAIB;
use App\Http\scrape\appdb;
use App\Dollar;
use Goutte\Client;
use Weidner\Goutte\GoutteFacadeGoutte;
use GuzzleHttp\Client as GuzzleClient;
use App\Http\scrape\CIB;

Route::get('/', function() {


//
//    $cib = new CIB();
//
//    $cib->scrape();
//
//
//    $aaib = new aaib();
//
//    $aaib->scrape($aaib->url);


    $appdb = new appdb() ;


    $appdb->updateDB(new CIB);

    $appdb->updateDB(new AAIB);




//
//    $client = new Client();
//
//    // Go to the symfony.com website
//    $crawler = $client->request('GET', 'http://aaib.com/services/rates');
//
//    $data = $crawler->filter('#rates-table td')->nextAll()->each(function ($node, $i) {
//        return (float) $node->text();
//    });
//
//
//
//    $price =Dollar::where('Bank_Id',1)->first();
//    $price->sellPrice = $data[1];
//    $price->buyPrice = $data[0];
//    $price->save();
//


//    $client = new Client();
//
//    // Go to the symfony.com website
//    $crawler = $client->request('GET', 'http://aaib.com/services/rates');
//
//    $crawler->filter('#rates-table td')->nextAll()->each(function ($node, $i) {
//        echo $node->text();
//    });
//
//


});

//
//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/getbanks',function(){

    $banks = Bank::all();

    return $banks;
});

Route::get('/update' , 'DollarsController@update');



