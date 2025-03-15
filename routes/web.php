<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'));
Route::get('/pos-pengamanan-mudik', fn() => view('pos-pengamanan-mudik'));
Route::get('/update-lalu-lintas', fn () => view('update-lalu-lintas'));
Route::get('/layanan-mudik', fn() => view('layanan-mudik'));
Route::get('/login', fn() => view('auth.login'))->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/upload', [UploadController::class, 'store'])->name('upload');
    Route::delete('/upload/{image}', [UploadController::class, 'destroy'])->name('upload.destroy');
    Route::patch('/upload/{image}', [UploadController::class, 'updateOrder'])->name('upload.updateOrder');
});

Route::get('/foo', function () {
    Artisan::call('storage:link');
});