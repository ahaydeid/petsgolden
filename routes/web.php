<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);

Route::get('loginadmin', [BookingAdminController::class, 'login']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/booking', [BookingController::class,'index'])->name('booking.index');

Route::post('/booking', [BookingController::class,'store'])->name('booking.store');

Route::get('/pendingrequest', [BookingAdminController::class,'index']);

Route::get('/ongoingrequest', [BookingAdminController::class, 'ongoing']);

Route::get('/history', [BookingAdminController::class, 'history']);


Route::get('/shop', function () {
    return view('shop');
});