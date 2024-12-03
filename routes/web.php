<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PejabatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KategoriFileController;
use App\Http\Controllers\KategoriWisataController;
use App\Http\Controllers\PangkatGolonganController;
use App\Http\Controllers\KategoriInformasiController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::get('/', [HomeController::class, 'home'])->name('home');

//* Admin Dashboard *//
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::post('/user/reset/{id}', [UserController::class, 'reset'])->name('user.reset');
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/addpackage', [AdminController::class, 'addpackage'])->name('addpackage');
Route::get('/packageactive', [AdminController::class, 'packageactive'])->name('packageactive');
Route::get('/packagepending', [AdminController::class, 'packagepending'])->name('packagepending');
Route::get('/packageexpired', [AdminController::class, 'packageexpired'])->name('packageexpired');
Route::get('/booking', [AdminController::class, 'booking'])->name('booking');
Route::get('/wishlist', [AdminController::class, 'wishlist'])->name('wishlist');
Route::get('/comment', [AdminController::class, 'comment'])->name('comment');
// Route::get('/logout', [AdminController::class, 'logout'])->name('logout');


//* Menu Bar *//
Route::get('/profilinstansi', [HomeController::class, 'profilinstansi'])->name('profilinstansi');
Route::get('/profilpimpinan', [HomeController::class, 'profilpimpinan'])->name('profilpimpinan  ');
Route::get('/profilpenyelenggara', [HomeController::class, 'profilpenyelenggara'])->name('profilpenyelenggara');
Route::get('/visimisi', [HomeController::class, 'visimisi'])->name('visimisi');
Route::get('/standarpelayanan', [HomeController::class, 'standarpelayanan'])->name('standarpelayanan');
Route::get('/perjanjiankerja', [HomeController::class, 'perjanjiankerja'])->name('perjanjiankerja');
Route::get('/sambutandinas', [HomeController::class, 'sambutandinas'])->name('sambutandinas');
Route::get('/strukturorganisasi', [HomeController::class, 'strukturorganisasi'])->name('strukturorganisasi');
Route::get('/agenda', [HomeController::class, 'agenda'])->name('agenda');
Route::get('/datakunjungan', [HomeController::class, 'datakunjungan'])->name('datakunjungan');
Route::get('/empatberita', [HomeController::class, 'empatberita'])->name('empatberita');
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/menu-informasi', [HomeController::class, 'menu_informasi'])->name('menu-informasi');
Route::get('/informasiterbaru/{id}', [HomeController::class, 'informasiterbaru'])->name('informasiterbaru');
Route::get('/pengumuman', [HomeController::class, 'pengumuman'])->name('pengumuman');
Route::get('/polingstatistik', [HomeController::class, 'polingstatistik'])->name('polingstatistik');
Route::get('/foto', [HomeController::class, 'foto'])->name('foto');
Route::get('/video', [HomeController::class, 'video'])->name('video');
Route::get('/download', [HomeController::class, 'download'])->name('download');
Route::get('/maklumatpelayanan', [HomeController::class, 'maklumatpelayanan'])->name('maklumatpelayanan');
Route::get('/desawisata', [HomeController::class, 'desawisata'])->name('desawisata');
Route::get('/dayatarikwisata', [HomeController::class, 'dayatarikwisata'])->name('dayatarikwisata');
Route::get('/industripariwisata', [HomeController::class, 'industripariwisata'])->name('industripariwisata');

Route::get('/ppid', [HomeController::class, 'ppid'])->name('ppid');
Route::get('/alurpermohonaninformasi', [HomeController::class, 'alurpermohonaninformasi'])->name('alurpermohonaninformasi');
Route::get('/hasilskm', [HomeController::class, 'hasilskm'])->name('hasilskm');
Route::get('/datasakip', [HomeController::class, 'datasakip'])->name('datasakip');
Route::get('/lra', [HomeController::class, 'lra'])->name('lra');
Route::get('/events', [HomeController::class, 'events'])->name('events');


Route::prefix('admin')->group(function () {
    Route::middleware(['auth', 'admin'])->group(function () {

        Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('logout');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::get('/kategori-file', [KategoriFileController::class, 'index'])->name('kategori-file');
        Route::post('/kategori-file/store', [KategoriFileController::class, 'store'])->name('kategori-file.store');
        Route::put('/kategori-file/update/{id}', [KategoriFileController::class, 'update'])->name('kategori-file.update');
        Route::delete('/kategori-file/destroy/{id}', [KategoriFileController::class, 'destroy'])->name('kategori-file.destroy');


        Route::get('/file', [FileController::class, 'index'])->name('file');
        Route::post('/file/store', [FileController::class, 'store'])->name('file.store');
        Route::put('/file/update/{id}', [FileController::class, 'update'])->name('file.update');
        Route::delete('/file/destroy/{id}', [FileController::class, 'destroy'])->name('file.destroy');

        Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
        Route::post('/profil/store', [ProfilController::class, 'store'])->name('profil.store');
        Route::put('/profil/update/{id}', [ProfilController::class, 'update'])->name('profil.update');
        Route::delete('/profil/destroy/{id}', [ProfilController::class, 'destroy'])->name('profil.destroy');
        Route::get('/user', [UserController::class, 'index'])->name('user');
        Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
        Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::delete('/user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');
        Route::post('/user/reset/{id}', [UserController::class, 'reset'])->name('user.reset');

        Route::get('/kategori-informasi', [KategoriInformasiController::class, 'index'])->name('kategori-informasi');
        Route::post('/kategori-informasi/store', [KategoriInformasiController::class, 'store'])->name('kategori-informasi.store');
        Route::put('/kategori-informasi/update/{id}', [KategoriInformasiController::class, 'update'])->name('kategori-informasi.update');
        Route::delete('/kategori-informasi/destroy/{id}', [KategoriInformasiController::class, 'destroy'])->name('kategori-informasi.destroy');

        Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi');
        Route::post('/informasi/store', [InformasiController::class, 'store'])->name('informasi.store');
        Route::put('/informasi/update/{id}', [InformasiController::class, 'update'])->name('informasi.update');
        Route::delete('/informasi/destroy/{id}', [InformasiController::class, 'destroy'])->name('informasi.destroy');

        Route::get('/kategori-wisata', [KategoriWisataController::class, 'index'])->name('kategori-wisata');
        Route::post('/kategori-wisata/store', [KategoriWisataController::class, 'store'])->name('kategori-wisata.store');
        Route::put('/kategori-wisata/update/{id}', [KategoriWisataController::class, 'update'])->name('kategori-wisata.update');
        Route::delete('/kategori-wisata/destroy/{id}', [KategoriWisataController::class, 'destroy'])->name('kategori-wisata.destroy');

        Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
        Route::post('/profil/store', [ProfilController::class, 'store'])->name('profil.store');
        Route::put('/profil/update/{id}', [ProfilController::class, 'update'])->name('profil.update');
        Route::delete('/profil/destroy/{id}', [ProfilController::class, 'destroy'])->name('profil.destroy');

        Route::get('/wisata', [WisataController::class, 'index'])->name('wisata');
        Route::post('/wisata/store', [WisataController::class, 'store'])->name('wisata.store');
        Route::put('/wisata/update/{id}', [WisataController::class, 'update'])->name('wisata.update');
        Route::delete('/wisata/destroy/{id}', [WisataController::class, 'destroy'])->name('wisata.destroy');

        Route::get('/settings', [SettingController::class, 'index'])->name('settings');
        Route::post('/settings/store', [SettingController::class, 'store'])->name('settings.store');
        Route::put('/settings/update/{id}', [SettingController::class, 'update'])->name('settings.update');
        Route::delete('/settings/destroy/{id}', [SettingController::class, 'destroy'])->name('settings.destroy');

        Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
        Route::post('/galeri/store', [GaleriController::class, 'store'])->name('galeri.store');
        Route::put('/galeri/update/{id}', [GaleriController::class, 'update'])->name('galeri.update');
        Route::delete('/galeri/destroy/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy');

        Route::get('/jabatan', [JabatanController::class, 'index'])->name('jabatan');
        Route::post('/jabatan/store', [JabatanController::class, 'store'])->name('jabatan.store');
        Route::put('/jabatan/update/{id}', [JabatanController::class, 'update'])->name('jabatan.update');
        Route::delete('/jabatan/destroy/{id}', [JabatanController::class, 'destroy'])->name('jabatan.destroy');

        Route::get('/pagol', [PangkatGolonganController::class, 'index'])->name('pagol');
        Route::post('/pagol/store', [PangkatGolonganController::class, 'store'])->name('pagol.store');
        Route::put('/pagol/update/{id}', [PangkatGolonganController::class, 'update'])->name('pagol.update');
        Route::delete('/pagol/destroy/{id}', [PangkatGolonganController::class, 'destroy'])->name('pagol.destroy');

        Route::get('/pejabat', [PejabatController::class, 'index'])->name('pejabat');
        Route::post('/pejabat/store', [PejabatController::class, 'store'])->name('pejabat.store');
        Route::put('/pejabat/update/{id}', [PejabatController::class, 'update'])->name('pejabat.update');
        Route::delete('/pejabat/destroy/{id}', [PejabatController::class, 'destroy'])->name('pejabat.destroy');
    });

    Route::middleware(['auth', 'pengguna'])->group(function () {
        Route::get('/pejabat', [PejabatController::class, 'index'])->name('pejabat');
    });

    Route::middleware(['auth', 'operator'])->group(function () {
        Route::get('/wisata', [WisataController::class, 'index'])->name('wisata');
        Route::put('/wisata/update/{id}', [WisataController::class, 'update'])->name('wisata.update');
        Route::get('/wisata/show/{id}', [WisataController::class, 'show'])->name('wisata.show');
        Route::post('/wisata/{id}/add-visitor', [WisataController::class, 'add_visitor'])->name('wisata.add_visitor');
    });
});


require __DIR__ . '/auth.php';
