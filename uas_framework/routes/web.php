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

// MENU MAKANAN
Route::get('/menumakan', [MakananController::class, 'index'])->name('menumakan');

// MENU MINUMAN
Route::get('/menuminum', [MinumanController::class, 'index'])->name('menuminum');

// // KERANJANG
// Route::get('/keranjang', [HomeController::class, 'keranjang'])->name('keranjang');
// Route::get('/showkeranjang', [PemesananController::class, 'showKeranjang'])->name('showkeranjang');

// // Route for keranjang() in PemesananController
// Route::get('/keranjang/all', [PemesananController::class, 'keranjang'])->name('keranjang.all');

// KERANJANG
Route::get('/keranjang', [HomeController::class, 'keranjang'])->name('keranjang');

// Route for showKeranjang() in PemesananController
Route::get('/showkeranjang', [PemesananController::class, 'showKeranjang'])->name('showkeranjang');

// Route for keranjang() in PemesananController
Route::get('/keranjang/all', [PemesananController::class, 'keranjang'])->name('keranjang.all');


// ADD TO CHART
Route::post('/add-to-cart/{id_makanan}', [PemesananController::class, 'addToCart']);

// RIWAYAT
Route::get('/riwayat', [HomeController::class, 'riwayat'])->name('riwayat');

Route::post('/halamanlogin', [AuthManager::class, 'loginPost'])->name('login.post');
Route::post('/halamanregister', [AuthManager::class, 'registerPost'])->name('register.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
Route::get('/halamanlogin', [AuthManager::class, 'halamanlogin'])->name('halamanlogin');
Route::get('/halamanregister', [AuthManager::class, 'halamanregister'])->name('halamanregister');

// Makanan
Route::get('/makanan', [MakananController::class, 'index']);
Route::get('/makanan/{id_makanan}', [MakananController::class, 'show']);

// Minuman
Route::get('/minuman', [MinumanController::class, 'index']);
Route::get('/minuman/{id_minuman}', [MinumanController::class, 'show']);

// // Tenant
// Route::middleware(['auth'])->group(function () {
//     Route::get('/tenant', [TenantController::class, 'index'])->name('tenant.index');
//     Route::get('/tenant/create', [TenantController::class, 'create'])->name('tenant.create');
//     Route::post('/tenant', [TenantController::class, 'store'])->name('tenant.store');
//     Route::get('/tenant/{tenant}/edit', [TenantController::class, 'edit'])->name('tenant.edit');
//     Route::put('/tenant/{tenant}', [TenantController::class, 'update'])->name('tenant.update');
//     Route::delete('/tenant/{tenant}', [TenantController::class, 'destroy'])->name('tenant.destroy');
// });

// Pemesanan
Route::post('/pemesanan', [PemesananController::class, 'store']);
Route::put('/pemesanan/{id_pemesanan}', [PemesananController::class, 'update']);
Route::delete('/pemesanan/{id_pemesanan}', [PemesananController::class, 'destroy']);
Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::get('/pemesanan/{id_pemesanan}', [PemesananController::class, 'show']);
Route::get('/pemesanan/{id_pemesanan}/makanan', [PemesananController::class, 'showMakanan']);
Route::get('/pemesanan/{id_pemesanan}/minuman', [PemesananController::class, 'showMinuman']);
Route::get('/pemesanan/{id_pemesanan}/users', [PemesananController::class, 'showUsers']);

// Pembayaran
Route::get('/pembayaran', [PembayaranController::class, 'index']);
Route::get('/pembayaran/{id_pembayaran}', [PembayaranController::class, 'show']);
Route::post('/pembayaran', [PembayaranController::class, 'store']);
Route::put('/pembayaran/{id_pembayaran}', [PembayaranController::class, 'update']);
Route::delete('/pembayaran/{id_pembayaran}', [PembayaranController::class, 'destroy']);