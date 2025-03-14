<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/peta-dan-jalur-mudik', function () {
    return view('peta-dan-jalur-mudik');
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
