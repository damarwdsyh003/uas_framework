<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersC;
use App\Http\Controllers\MakananC;
use App\Http\Controllers\MinumanC;
use App\Http\Controllers\TenantC;
use App\Http\Controllers\PemesananC;
use App\Http\Controllers\PembayaranC;
use App\Http\Controllers\HomeController;

// HOME
Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

// LOGIN-REGIS-LOGOUT
Route::post('/login', [UsersController::class, 'login'])->name('login');
Route::post('/login1', [UsersController::class, 'login1'])->name('login1');
Route::post('/register1', [UsersController::class, 'register1']);
Route::post('/register2', [UsersController::class, 'register2'])->name('register2');
Route::post('/register3', [UsersController::class, 'register3'])->name('register3');
Route::post('/register4', [UsersController::class, 'register4'])->name('register4');
Route::post('/logout', [UsersController::class, 'logout'])->name('logout');
Route::get('/profile', [UsersController::class, 'getprofile'])->name('profile');
Route::get('/profile-admin', [UsersController::class, 'getprofileadmin'])->name('profile.admin');
Route::get('/authenticated-user', [UsersController::class, 'getAuthenticatedUser'])->name('authenticated.user');

// Admin
Route::get('/admin', [UsersController::class, 'showadmin'])->name('admin');
Route::get('/admin/{id}/edit', [UsersController::class, 'showeditadmin'])->name('admin.edit');
Route::put('/admin/{id}', [UsersController::class, 'editadmin'])->name('admin.update');
Route::delete('/admin/{id}', [UsersController::class, 'hapusadmin'])->name('admin.delete');

// Staf
Route::get('/staf', [UsersController::class, 'showstaf'])->name('staf');
Route::get('/staf/{id}/edit', [UsersController::class, 'showeditstaf'])->name('staf.edit');
Route::put('/staf/{id}', [UsersController::class, 'editstaf'])->name('staf.update');
Route::delete('/staf/{id}', [UsersController::class, 'hapusstaf'])->name('staf.delete');

// Civitas Akademik
Route::get('/civitas-akademik', [UsersController::class, 'showcivitas_akademik'])->name('civitas-akademik');
Route::get('/civitas-akademik/{id}/edit', [UsersController::class, 'showeditcivitas_akademik'])->name('civitas-akademik.edit');
Route::put('/civitas-akademik/{id}', [UsersController::class, 'editcivitas_akademik'])->name('civitas-akademik.update');
Route::delete('/civitas-akademik/{id}', [UsersController::class, 'hapuscivitas_akademik'])->name('civitas-akademik.delete');

// Pelanggan
Route::get('/pelanggan', [UsersController::class, 'showpelanggan'])->name('pelanggan');
Route::get('/pelanggan/{id}/edit', [UsersController::class, 'showeditpelanggan'])->name('pelanggan.edit');
Route::put('/pelanggan/{id}', [UsersController::class, 'editpelanggan'])->name('pelanggan.update');
Route::delete('/pelanggan/{id}', [UsersController::class, 'hapuspelanggan'])->name('pelanggan.delete');

// Halaman Login
Route::get('/login', [UsersController::class, 'halamanlogin'])->name('login');

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