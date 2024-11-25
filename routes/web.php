<?php

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