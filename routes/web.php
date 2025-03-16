<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LalulintasAlternatifController;
use App\Http\Controllers\LayananMudikController;
use App\Http\Controllers\PospamController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/pos-pengamanan-mudik', [HomeController::class, 'posPengamanPublic']);
Route::get('/update-lalu-lintas', [HomeController::class, 'updateLaluLintas']);
Route::get('/layanan-mudik', [HomeController::class, 'layananMudik']);

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
