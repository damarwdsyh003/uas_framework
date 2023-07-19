<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\MinumanController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthManager;

// HOME
Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

// HOME 2
Route::get('/home', [HomeController::class, 'home'])->name('home');

// MENU
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');

// KERANJANG
Route::get('/keranjang', [HomeController::class, 'keranjang'])->name('keranjang');

// RIWAYAT
Route::get('/riwayat', [HomeController::class, 'riwayat'])->name('riwayat');

Route::post('/halamanlogin', [AuthManager::class, 'loginPost'])->name('login.post');
Route::post('/halamanregister', [AuthManager::class, 'registerPost'])->name('register.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
Route::get('/halamanlogin', [AuthManager::class, 'halamanlogin'])->name('halamanlogin');
Route::get('/halamanregister', [AuthManager::class, 'halamanregister'])->name('halamanregister');

// Makanan
Route::middleware(['auth'])->group(function () {
    Route::get('/makanan', [MakananController::class, 'index'])->name('makanan.index');
    Route::get('/makanan/create', [MakananController::class, 'create'])->name('makanan.create');
    Route::post('/makanan', [MakananController::class, 'store'])->name('makanan.store');
    Route::get('/makanan/{makanan}/edit', [MakananController::class, 'edit'])->name('makanan.edit');
    Route::put('/makanan/{makanan}', [MakananController::class, 'update'])->name('makanan.update');
    Route::delete('/makanan/{makanan}', [MakananController::class, 'destroy'])->name('makanan.destroy');
});

// Minuman
Route::middleware(['auth'])->group(function () {
    Route::get('/minuman', [MinumanController::class, 'index'])->name('minuman.index');
    Route::get('/minuman/create', [MinumanController::class, 'create'])->name('minuman.create');
    Route::post('/minuman', [MinumanController::class, 'store'])->name('minuman.store');
    Route::get('/minuman/{minuman}/edit', [MinumanController::class, 'edit'])->name('minuman.edit');
    Route::put('/minuman/{minuman}', [MinumanController::class, 'update'])->name('minuman.update');
    Route::delete('/minuman/{minuman}', [MinumanController::class, 'destroy'])->name('minuman.destroy');
});

// Tenant
Route::middleware(['auth'])->group(function () {
    Route::get('/tenant', [TenantController::class, 'index'])->name('tenant.index');
    Route::get('/tenant/create', [TenantController::class, 'create'])->name('tenant.create');
    Route::post('/tenant', [TenantController::class, 'store'])->name('tenant.store');
    Route::get('/tenant/{tenant}/edit', [TenantController::class, 'edit'])->name('tenant.edit');
    Route::put('/tenant/{tenant}', [TenantController::class, 'update'])->name('tenant.update');
    Route::delete('/tenant/{tenant}', [TenantController::class, 'destroy'])->name('tenant.destroy');
});

// Pemesanan
Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan.index');
Route::get('/pemesanan/create', [PemesananController::class, 'create'])->name('pemesanan.create');
Route::post('/pemesanan', [PemesananController::class, 'store'])->name('pemesanan.store');
Route::get('/pemesanan/{pemesanan}/edit', [PemesananController::class, 'edit'])->name('pemesanan.edit');
Route::put('/pemesanan/{pemesanan}', [PemesananController::class, 'update'])->name('pemesanan.update');
Route::delete('/pemesanan/{pemesanan}', [PemesananController::class, 'destroy'])->name('pemesanan.destroy');

// Pembayaran
Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');
Route::get('/pembayaran/create', [PembayaranController::class, 'create'])->name('pembayaran.create');
Route::post('/pembayaran', [PembayaranController::class, 'store'])->name('pembayaran.store');
Route::get('/pembayaran/{pembayaran}/edit', [PembayaranController::class, 'edit'])->name('pembayaran.edit');
Route::put('/pembayaran/{pembayaran}', [PembayaranController::class, 'update'])->name('pembayaran.update');
Route::delete('/pembayaran/{pembayaran}', [PembayaranController::class, 'destroy'])->name('pembayaran.destroy');