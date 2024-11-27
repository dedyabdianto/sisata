<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KategoriWisataController;
use App\Http\Controllers\KategoriInformasiController;


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

//* Menu Bar *//
Route::get('/profilinstansi', [HomeController::class, 'profilinstansi'])->name('profilinstansi');
Route::get('/profilpimpinan', [HomeController::class, 'profilpimpinan'])->name('profilpimpinan');
Route::get('/visimisi', [HomeController::class, 'visimisi'])->name('visimisi');
Route::get('/standarpelayanan', [HomeController::class, 'standarpelayanan'])->name('standarpelayanan');
Route::get('/sambutanrektor', [HomeController::class, 'sambutanrektor'])->name('sambutanrektor');
Route::get('/empatberita', [HomeController::class, 'empatberita'])->name('empatberita');
Route::get('/informasiterbaru', [HomeController::class, 'informasiterbaru'])->name('informasiterbaru');
Route::get('/pengumuman', [HomeController::class, 'pengumuman'])->name('pengumuman');
Route::get('/polingstatistik', [HomeController::class, 'polingstatistik'])->name('polingstatistik');
Route::get('/foto', [HomeController::class, 'foto'])->name('foto');
Route::get('/video', [HomeController::class, 'video'])->name('video');

Route::get('/kategori-informasi', [KategoriInformasiController::class, 'index'])->name('kategori-informasi');
Route::post('/kategori-informasi/store', [KategoriInformasiController::class, 'store'])->name('kategori-informasi.store');
Route::put('/kategori-informasi/update/{id}', [KategoriInformasiController::class, 'update'])->name('kategori-informasi.update');
Route::delete('/kategori-informasi/destroy/{id}', [KategoriInformasiController::class, 'destroy'])->name('kategori-informasi.destroy');

Route::get('/kategori-wisata', [KategoriWisataController::class, 'index'])->name('kategori-wisata');
Route::post('/kategori-wisata/store', [KategoriWisataController::class, 'store'])->name('kategori-wisata.store');
Route::put('/kategori-wisata/update/{id}', [KategoriWisataController::class, 'update'])->name('kategori-wisata.update');
Route::delete('/kategori-wisata/destroy/{id}', [KategoriWisataController::class, 'destroy'])->name('kategori-wisata.destroy');

Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::post('/profil/store', [ProfilController::class, 'store'])->name('profil.store');
Route::put('/profil/update/{id}', [ProfilController::class, 'update'])->name('profil.update');
Route::delete('/profil/destroy/{id}', [ProfilController::class, 'destroy'])->name('profil.destroy');