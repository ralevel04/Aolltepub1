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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::group(['middleware'=>['web', 'loginora']], function(){
	Route::get('/hometown', 'HomeController@index');

	Route::resource('cin', 'CinController');
	Route::resource('cout', 'CoutController');
	Route::resource('jdwl', 'JadwalController');
	Route::resource('jpers', 'JPersonilController');
	Route::resource('dash', 'DashboardController');
	
    Route::get('/profilku', 'ProfilController@profilku');

	//Surat Masuk
    Route::get('/deleteAllin', 'CinController@deleteAllin');
    Route::get('/deletem/{id}', 'CinController@deletem');
    Route::get('/exportexcelin', 'CinController@exportexcel');
    Route::get('/printpdfin', 'CinController@getPDFIn');

	//Surat Keluar
	Route::get('/deleteAllout', 'CoutController@deleteAllin');
    Route::get('/deletem/{id}', 'CoutController@deletem');
    Route::get('/exportexcelout', 'CoutController@exportexcelout');
    Route::get('/getPDFout', 'CoutController@getPDFout');
});

Route::group (['middleware'=>['web', 'admin', 'loginora']], function(){
	Route::resource('profil', 'ProfilController');
	Route::resource('kntr', 'KantorController');
	Route::resource('ukerja', 'UKerjaController');
	Route::resource('dftr', 'DaftarController');
	Route::resource('kntr', 'KantorController');

    Route::get('/allprofil', 'ProfilController@allprofil');

});

















