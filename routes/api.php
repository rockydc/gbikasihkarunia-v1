<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('renungan/getdata', 'API\RenunganController@all');
Route::post('renungan/insert','API\RenunganController@insert');
Route::put('renungan/update/{id}','API\RenunganController@update');
Route::delete('renungan/delete/{id}','API\RenunganController@delete');


Route::prefix('event')
->group(function(){

    Route::get('getdata','API\EventController@all');
});
Route::prefix('pelayanan')
->group(function(){
    Route::get('getdata','API\PelayananController@all');
});
Route::prefix('komunitas')
->group(function(){
    Route::get('getdata','API\KomunitasController@all');
});
Route::prefix('doa')
->group(function(){
    Route::get('getdata','API\DoaController@all');
    Route::post('insert','API\DoaController@insert');
});
Route::prefix('persembahan')
->group(function(){
    Route::get('getdata','API\PersembahanController@all');
   
});

Route::prefix('video')
->group(function(){
    Route::get('getdata','API\VideoController@all');
   
});