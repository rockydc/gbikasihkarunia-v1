<?php

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



// home
Route::get('/',function(){
    return view('pages.frontend.home.index');
});
Route::get('/Renungan',function(){
    return view('pages.frontend.home.index');
});
Route::get('/event',function(){
    return view('pages.frontend.home.index');
});
Route::get('/pelayanan',function(){
    return view('pages.frontend.home.index');
});
Route::get('/komunitas',function(){
    return view('pages.frontend.home.index');
});

Route::get('/doa',function(){
    return view('pages.frontend.home.index');
});
Route::get('/persembahan',function(){
    return view('pages.frontend.home.index');
});
Route::get('/jemaatbaru',function(){
    return view('pages.frontend.home.index');
});

Route::get('/maintenance',function(){
    return view('pages.frontend.home.index');
});




// admin
Route::prefix('admin')
->group(function(){
    Route::get('/', function () {
        return view('layouts.dashboard');
    });
    
    Route::Resource('event','EventController');
    Route::Resource('pelayanan','PelayananController');
    Route::Resource('komunitas','KomunitasController');
    Route::Resource('renungan','RenunganController');
    Route::Resource('doa','DoaController');
    Route::Resource('persembahan','PersembahanController');

    Route::Resource('video','VideoController');
    Route::Resource('jemaat','JemaatController');

});




