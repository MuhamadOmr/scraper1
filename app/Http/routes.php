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
use App\Http\scrape\Alex;
use App\Http\scrape\appdb;
use App\Dollar;
use App\Http\scrape\CBE;
use App\Http\scrape\CIB;
use App\Http\scrape\MISR;
use App\Http\scrape\NBE;

Route::get('/', function() {


//
//    $cib = new CIB();
//
//    $cib->scrape();
//
//
//    $cbe = new CBE();
//
//    $cbe->scrape();
//
//
//    $misr = new MISR();
//
//    $misr->scrape();
//
//    $alex = new Alex();
//
//    $alex->scrape();
//
//    $nbe = new NBE();
//
//    $nbe->scrape();
//




    $appdb = new appdb() ;


    $appdb->updateDB(new CIB);

    $appdb->updateDB(new AAIB);

    $appdb->updateDB(new CBE);


    $appdb->updateDB(new Alex);

    $appdb->updateDB(new NBE);

    $appdb->updateDB(new MISR);



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



