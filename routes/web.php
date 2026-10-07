<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});






Route::get('/home', function() {
    return ('Selamat Pagi Dunia, 707082400103_Frezzy Alva Wijaksana');
});





Route::get('/page', function () {
    return view('pages.hi');
});