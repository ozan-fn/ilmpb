<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LalulintasAlternatifController;
use App\Http\Controllers\LayananMudikController;
use App\Http\Controllers\PospamController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'));
Route::get('/pos-pengamanan-mudik', fn() => view('pos-pengamanan-mudik'));
Route::get('/update-lalu-lintas', fn () => view('update-lalu-lintas'));
Route::get('/layanan-mudik', fn() => view('layanan-mudik'));
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin/pospam', [PospamController::class, 'index'])->name('admin-pospam');
    Route::get('/admin/layanan-mudik', [LayananMudikController::class, 'index'])->name('admin-layanan-mudik');
    Route::get('/admin/lalulintas-alternatif', [LalulintasAlternatifController::class, 'index'])->name('admin-lalulintas-alternatif');

    Route::post('/upload', [UploadController::class, 'store'])->name('upload');
    Route::delete('/upload/{image}', [UploadController::class, 'destroy'])->name('upload.destroy');
    Route::patch('/upload/{image}', [UploadController::class, 'updateOrder'])->name('upload.updateOrder');
});
