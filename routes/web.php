<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\KategoriController;

// Halaman awal
Route::get('/', function () {
    return redirect()->route('login');
});

// Login
Route::middleware('guest')->group(function () {

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);

});

// Setelah login
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('welcome', [
            'title' => 'Dashboard'
        ]);
    })->name('dashboard');

    Route::resource('ruang', RuangController::class);
    Route::resource('karyawan', KaryawanController::class);
    Route::resource('pemasok', PemasokController::class);
    Route::resource('barang', BarangController::class);
    Route::resource('barang_masuk', BarangMasukController::class);
    Route::resource('kategori', KategoriController::class);

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

});
