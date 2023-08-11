<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/Startseite', 'App\Http\Controllers\HomeController@index');
Route::get('/Impressum', 'App\Http\Controllers\ImpressumController@getImpressumDaten');
Route::get('/Information/Datenschutzerklaerung', 'App\Http\Controllers\DatenschutzerklärungController@getDatenschutzerklärungDaten');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
