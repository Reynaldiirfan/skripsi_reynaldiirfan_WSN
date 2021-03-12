<?php
use App\Event\TaskEvent;

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
    return view('skripsi_home');
});

// Route::get('/sensing', function () {
//     return view('skripsi_sensing');
// });

Route::get('/cara-pakai', function () {
    return view('skripsi_carapakai');
});

Route::get('/print-sensing', function () {
    return view('skripsi_perangkat');
});

Route::get('/GIS', function () {
    return view('skripsi_gis');
});

// Route::get('/check-status', function () {
//     return view('skripsi_checkstatus');
// });

Route::get('/print-sensing','PrintViewController@index');
Route::get('/print-sensing/cari','PrintViewController@cari');
Route::get('/print-sensing/sortkode','PrintViewController@sortkode');

Route::get('/GIS','GISViewController@index');

Route::get('/sensing','SensingViewController@index');

Route::get('/check-status','StatusViewController@index');
Route::get('/check-status/update','StatusViewController@update');
Route::put('/check-status/update', 'StatusViewController@update');

Route::get('event', function () {
    event(new TaskEvent('Hey How Are You'));
});


