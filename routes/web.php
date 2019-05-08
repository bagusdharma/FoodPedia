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
// Route::get('/breakfast', function () {
//         return view('kategori');
// });
Route::get('/detail', function () {
        return view('detail');
});
Route::get('/aboutus', function () {
        return view('aboutus');
});
Route::get('/breakfast', function () {
        return view('breakfast');
});
Route::get('/lokasi', function () {
        return view('lokasi');
});

Route::get('/lunch', function () {
        return view('lunch');
});

Route::get('/dinner', function () {
        return view('dinner');
});

Route::get('/fastfood', function () {
        return view('layouts.fastfood');
});
