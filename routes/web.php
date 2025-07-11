<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookingAdminController;
use App\Http\Controllers\WaitingListController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\OnGoingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);


Route::get('/login', [AuthController::class, 'view'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// Customer Booking
Route::get('/booking', [BookingController::class,'index'])->name('booking.index');
Route::post('/booking', [BookingController::class,'store'])->name('booking.store');


// Pending Request
Route::get('/pendingrequest', [BookingAdminController::class,'index'])->middleware('auth')->name('pendingrequest.index');
Route::get('/pendingrequest/{id}/edit', [BookingAdminController::class,'edit'])->middleware('auth')->name('pendingrequest.edit');
Route::put('/pendingrequest/{id}/update', [BookingAdminController::class, 'update'])->middleware('auth')->name('pendingrequest.update');


// Waiting List
Route::get('/waitingrequest', [WaitingListController::class,'index'])->middleware('auth')->name('waitingrequest.index');
Route::get('/waitingrequest/{id}/edit', [WaitingListController::class,'edit'])->middleware('auth')->name('waitingrequest.edit');
Route::put('/waitingrequest/{id}/update', [WaitingListController::class, 'update'])->middleware('auth')->name('waitingrequest.update');


// Ongoing Service
Route::get('/ongoingrequest', [BookingAdminController::class, 'ongoing'])->middleware('auth')->name('ongoingrequest.ongoing');
Route::get('/ongoingrequest/{id}/edit', [OnGoingController::class,'edit'])->middleware('auth')->name('ongoingrequest.edit');
Route::put('/ongoingingrequest/{id}/update', [OnGoingController::class, 'update'])->middleware('auth')->name('ongoingrequest.update');


// Service History
Route::get('/history', [BookingAdminController::class, 'history'])->middleware('auth');


// Testimonial
Route::get('/testimonials', [TestimonialsController::class, 'index'])->middleware('auth')->name('testimonials.index');
Route::post('/testimonials', [TestimonialsController::class, 'store'])->middleware('auth')->name('testimonials.store');
Route::get('/testimonials/{id}/edit', [TestimonialsController::class,'edit'])->middleware('auth')->name('testimonials.edit');
Route::put('/testimonials/{id}/update', [TestimonialsController::class, 'update'])->middleware('auth')->name('testimonials.update');
Route::delete('/testimonials/{id}/delete', [TestimonialsController::class, 'destroy'])->middleware('auth')->name('testimonials.delete');





Route::get('/shop', function () {
    return view('shop');
});