<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProdiController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\PrestasiController;
use App\Http\Controllers\Admin\DosenController;
use App\Http\Controllers\LandingController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('prodi', ProdiController::class);
    Route::resource('berita', BeritaController::class);
    Route::resource('prestasi', PrestasiController::class);
    Route::resource('dosen', DosenController::class);
});

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/berita/{berita:slug}', [LandingController::class, 'detailBerita'])
    ->name('berita.detail');