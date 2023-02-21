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
    return "Selamat Datang";
});

Route::get('/about', function () {
    return "NIM : 2141720123 <br> Nama : Ikmal Faris Musyaffa";
});

Route::get('articles/{id?}', function ($id=0) {
    return "Artikel dengan id = ".$id;
});