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
    return view('index');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/news', function () {
    return view('news');
});

