<?php

use App\Reporting\SalesHtmlOutput;
use App\Reporting\SalesReporter;
use App\Repositories\CollectionSalesRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('single-responsibility', function () {

    $report = new SalesReporter(new CollectionSalesRepository);

    $begin = new Carbon('2021-03-18 14:43:40');
    $end = new Carbon('2021-03-20 14:43:40');

    return $report->between($begin, $end, new SalesHtmlOutput);
});
