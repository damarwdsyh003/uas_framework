<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersC;
use App\Http\Controllers\MakananC;
use App\Http\Controllers\MinumanC;
use App\Http\Controllers\TenantC;
use App\Http\Controllers\PemesananC;
use App\Http\Controllers\PembayaranC;

Route::post('/login', [UsersC::class, 'login'])->name('login');
Route::post('/login1', [UsersC::class, 'login1'])->name('login1');
Route::post('/register1', [UsersC::class, 'register1']);
Route::post('/register2', [UsersC::class, 'register2'])->name('register2');
Route::post('/register3', [UsersC::class, 'register3'])->name('register3');
Route::post('/register4', [UsersC::class, 'register4'])->name('register4');
Route::post('/logout', [UsersC::class, 'logout'])->name('logout');
Route::get('/profile', [UsersC::class, 'getprofile'])->name('profile');
Route::get('/profile-admin', [UsersC::class, 'getprofileadmin'])->name('profile.admin');
Route::get('/authenticated-user', [UsersC::class, 'getAuthenticatedUser'])->name('authenticated.user');

// Admin
Route::get('/admin', [UsersC::class, 'showadmin'])->name('admin');
Route::get('/admin/{id}/edit', [UsersC::class, 'showeditadmin'])->name('admin.edit');
Route::put('/admin/{id}', [UsersC::class, 'editadmin'])->name('admin.update');
Route::delete('/admin/{id}', [UsersC::class, 'hapusadmin'])->name('admin.delete');

// Staf
Route::get('/staf', [UsersC::class, 'showstaf'])->name('staf');
Route::get('/staf/{id}/edit', [UsersC::class, 'showeditstaf'])->name('staf.edit');
Route::put('/staf/{id}', [UsersC::class, 'editstaf'])->name('staf.update');
Route::delete('/staf/{id}', [UsersC::class, 'hapusstaf'])->name('staf.delete');

// Civitas Akademik
Route::get('/civitas-akademik', [UsersC::class, 'showcivitas_akademik'])->name('civitas-akademik');
Route::get('/civitas-akademik/{id}/edit', [UsersC::class, 'showeditcivitas_akademik'])->name('civitas-akademik.edit');
Route::put('/civitas-akademik/{id}', [UsersC::class, 'editcivitas_akademik'])->name('civitas-akademik.update');
Route::delete('/civitas-akademik/{id}', [UsersC::class, 'hapuscivitas_akademik'])->name('civitas-akademik.delete');

// Pelanggan
Route::get('/pelanggan', [UsersC::class, 'showpelanggan'])->name('pelanggan');
Route::get('/pelanggan/{id}/edit', [UsersC::class, 'showeditpelanggan'])->name('pelanggan.edit');
Route::put('/pelanggan/{id}', [UsersC::class, 'editpelanggan'])->name('pelanggan.update');
Route::delete('/pelanggan/{id}', [UsersC::class, 'hapuspelanggan'])->name('pelanggan.delete');

// Halaman Login
Route::get('/halaman-login', [UsersC::class, 'halamanlogin'])->name('halaman.login');

// Makanan
Route::middleware(['auth'])->group(function () {
    Route::get('/makanan', [MakananC::class, 'index'])->name('makanan.index');
    Route::get('/makanan/create', [MakananC::class, 'create'])->name('makanan.create');
    Route::post('/makanan', [MakananC::class, 'store'])->name('makanan.store');
    Route::get('/makanan/{makanan}/edit', [MakananC::class, 'edit'])->name('makanan.edit');
    Route::put('/makanan/{makanan}', [MakananC::class, 'update'])->name('makanan.update');
    Route::delete('/makanan/{makanan}', [MakananC::class, 'destroy'])->name('makanan.destroy');
});

// Minuman
Route::middleware(['auth'])->group(function () {
    Route::get('/minuman', [MinumanC::class, 'index'])->name('minuman.index');
    Route::get('/minuman/create', [MinumanC::class, 'create'])->name('minuman.create');
    Route::post('/minuman', [MinumanC::class, 'store'])->name('minuman.store');
    Route::get('/minuman/{minuman}/edit', [MinumanC::class, 'edit'])->name('minuman.edit');
    Route::put('/minuman/{minuman}', [MinumanC::class, 'update'])->name('minuman.update');
    Route::delete('/minuman/{minuman}', [MinumanC::class, 'destroy'])->name('minuman.destroy');
});

// Tenant
Route::middleware(['auth'])->group(function () {
    Route::get('/tenant', [TenantC::class, 'index'])->name('tenant.index');
    Route::get('/tenant/create', [TenantC::class, 'create'])->name('tenant.create');
    Route::post('/tenant', [TenantC::class, 'store'])->name('tenant.store');
    Route::get('/tenant/{tenant}/edit', [TenantC::class, 'edit'])->name('tenant.edit');
    Route::put('/tenant/{tenant}', [TenantC::class, 'update'])->name('tenant.update');
    Route::delete('/tenant/{tenant}', [TenantC::class, 'destroy'])->name('tenant.destroy');
});

// Pemesanan
Route::get('/pemesanan', [PemesananC::class, 'index'])->name('pemesanan.index');
Route::get('/pemesanan/create', [PemesananC::class, 'create'])->name('pemesanan.create');
Route::post('/pemesanan', [PemesananC::class, 'store'])->name('pemesanan.store');
Route::get('/pemesanan/{pemesanan}/edit', [PemesananC::class, 'edit'])->name('pemesanan.edit');
Route::put('/pemesanan/{pemesanan}', [PemesananC::class, 'update'])->name('pemesanan.update');
Route::delete('/pemesanan/{pemesanan}', [PemesananC::class, 'destroy'])->name('pemesanan.destroy');

// Pembayaran
Route::get('/pembayaran', [PembayaranC::class, 'index'])->name('pembayaran.index');
Route::get('/pembayaran/create', [PembayaranC::class, 'create'])->name('pembayaran.create');
Route::post('/pembayaran', [PembayaranC::class, 'store'])->name('pembayaran.store');
Route::get('/pembayaran/{pembayaran}/edit', [PembayaranC::class, 'edit'])->name('pembayaran.edit');
Route::put('/pembayaran/{pembayaran}', [PembayaranC::class, 'update'])->name('pembayaran.update');
Route::delete('/pembayaran/{pembayaran}', [PembayaranC::class, 'destroy'])->name('pembayaran.destroy');