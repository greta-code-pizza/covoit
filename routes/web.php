<?php

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
Route::get('/erreur', function () {
    return view('errorToken');
});

Route::get('contact', 'ContactController@show')->name('contact');
Route::Post('contact', 'ContactController@store');

Route::get('creation-trajet', 'TrajetController@show')->name('creation-trajet');
Route::Post('creation-trajet', 'TrajetController@store');

Route::get('demande-trajet', 'DemandeTrajetController@show')->name('demande-trajet');
Route::Post('demande-trajet', 'DemandeTrajetController@store');
