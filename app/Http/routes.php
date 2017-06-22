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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('daerah_rawan', 'Daerah_rawanController');
Route::resource('lap_kehilangan', 'Lap_kehilanganController');
Route::resource('saran_komentar', 'Saran_komentarController');
Route::resource('penemuan', 'PenemuanController');

Route::resource('guest_lk', 'Guest_lkController');
Route::resource('guest_pk', 'Guest_pkController');

Route::resource('guest_berita', 'Guest_beritaController');
Route::resource('my_laporan', 'My_laporanController');

Route::resource('user_lk', 'User_lkController');

Route::resource('berita', 'BeritaController');

Route::get('insert','Saran_komentarController@insertform');
Route::post('create','Saran_komentarController@insert');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/visi_misi', function(){
		return view('visi_misi');
	});
Route::get('/struktur', function(){
		return view('struktur');
	});

Route::post('login/custom', [
	'uses' => 'LoginController@login',
	'as' => 'login.custom'
]);
Route::group(['middleware' => 'auth'], function(){
	Route::get('/home', function(){
		return view('home');
	})->name('home');;
	Route::get('/dashboard', function(){
		return view('dashboard');
	})->name('dashboard');;
});
