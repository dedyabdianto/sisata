<?php

use App\Http\Controllers\KategoriInformasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('pages.home');
});


//* Admin Dashboard *//
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/user', [AdminController::class, 'user'])->name('user');
Route::get('/useredit', [AdminController::class, 'useredit'])->name('useredit');
Route::get('/newuser', [AdminController::class, 'newuser'])->name('newuser');
Route::get('/addpackage', [AdminController::class, 'addpackage'])->name('addpackage');
Route::get('/packageactive', [AdminController::class, 'packageactive'])->name('packageactive');
Route::get('/packagepending', [AdminController::class, 'packagepending'])->name('packagepending');
Route::get('/packageexpired', [AdminController::class, 'packageexpired'])->name('packageexpired');
Route::get('/booking', [AdminController::class, 'booking'])->name('booking');
Route::get('/wishlist', [AdminController::class, 'wishlist'])->name('wishlist');
Route::get('/comment', [AdminController::class, 'comment'])->name('comment');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/kategori-informasi', [KategoriInformasiController::class, 'index'])->name('kategori-informasi');
Route::post('/kategori-informasi/store', [KategoriInformasiController::class, 'store'])->name('kategori-informasi.store');
Route::put('/kategori-informasi/update/{id}', [KategoriInformasiController::class, 'update'])->name('kategori-informasi.update');
Route::delete('/kategori-informasi/destroy/{id}', [KategoriInformasiController::class, 'destroy'])->name('kategori-informasi.destroy');
