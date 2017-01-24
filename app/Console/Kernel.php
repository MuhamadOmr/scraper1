<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Http\scrape\AAIB;
use App\Http\scrape\Alex;
use App\Http\scrape\appdb;
use App\Dollar;
use App\Http\scrape\CBE;
use App\Http\scrape\CIB;
use App\Http\scrape\MISR;
use App\Http\scrape\NBE;


class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        $schedule->call(function () {

            $appdb = new appdb() ;


            $appdb->updateDB(new AAIB);

            $appdb->updateDB(new CIB);

            $appdb->updateDB(new CBE);


            $appdb->updateDB(new Alex);

            $appdb->updateDB(new NBE);

            $appdb->updateDB(new MISR);

        })->hourly();
    }
}
