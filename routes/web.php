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


Route::resource('daerah_rawan', 'Daerah_rawanController');
Route::resource('user', 'UserController');
Route::resource('saran_komentar', 'Saran_komentarController');
Route::resource('lap_kehilangan', 'Lap_kehilanganController');
Route::resource('penemuan', 'PenemuanController');
Route::resource('user_lk', 'User_lkController');
Route::resource('berita', 'BeritaController');