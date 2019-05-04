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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', function () {
        return view('foodhome');
    })->name('home');
Route::get('/profile', 'PelangganController@getPelanggan')->name('get.pelanggan');
Route::get('/breakfast', function () {
        return view('kategori');
});
