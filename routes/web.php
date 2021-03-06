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

Route::get('contact', 'ContactController@show')->name('contact');
Route::Post('contact', 'ContactController@store');

Route::get('creation-trajet', 'TrajetController@show')->name('creation-trajet');
Route::Post('creation-trajet', 'TrajetController@store')->name('succesTrajet');

Route::get('demande-trajet','DemandeTrajetController@show')->name('demande-trajet');
Route::Post('demande-trajet','DemandeTrajetController@store');

Route::get('demande-trajet&token={token}',function () {
    return view("demande-trajet");
});
Route::get('/erreur', function () {
    return view('verifIntermediaire');
});
Route::get('/successMailing', function () {
    return view('successMailing');
});
Route::get('/successParticipation', function () {
    return view('successParticipation');
});

Route::Post('inscription','InscriptionController@store');
