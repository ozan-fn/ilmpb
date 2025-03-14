<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/pos-pengamanan-mudik', function () {
    return view('pos-pengamanan-mudik');
});

Route::get('/update-lalu-lintas', function () {
    return view('update-lalu-lintas');
});

Route::get('/layanan-mudik', function () {
    return view('layanan-mudik');
});

Route::get('/tips-mudik', function () {
    return view('tips-mudik');
});
