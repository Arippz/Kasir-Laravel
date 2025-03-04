<?php

use App\Http\Controllers\Auth\LoginController;
use App\Livewire\Beranda;
use App\Livewire\Laporan;
use App\Livewire\Produk;
use App\Livewire\Transaksi;
use App\Livewire\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', Beranda::class)->middleware(['auth'])->name('home');
Route::get('/user', User::class)->middleware(['auth'])->name('user');
Route::get('/produk', Produk::class)->middleware(['auth'])->name('produk');
Route::get('/transaksi', Transaksi::class)->middleware(['auth'])->name('transaksi');
Route::get('/laporan', Laporan::class)->middleware(['auth'])->name('laporan');
Route::get('/cetak', ['App\Http\Controllers\HomeController', 'cetak']);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
