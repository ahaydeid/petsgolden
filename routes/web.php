<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingAdminController;
use App\Http\Controllers\TestimonialsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);

Route::get('loginadmin', [BookingAdminController::class, 'login']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Customer Booking
Route::get('/booking', [BookingController::class,'index'])->name('booking.index');
Route::post('/booking', [BookingController::class,'store'])->name('booking.store');


// Pending Request
Route::get('/pendingrequest', [BookingAdminController::class,'index'])->name('pendingrequest.index');
Route::get('/pendingrequest/{id}/edit', [BookingAdminController::class,'edit'])->name('pendingrequest.edit');
Route::put('/pendingrequest/{id}/update', [TestimonialsController::class, 'update'])->name('pendingrequest.update');


// Ongoing Request
Route::get('/ongoingrequest', [BookingAdminController::class, 'ongoing']);


// Service History
Route::get('/history', [BookingAdminController::class, 'history']);


// Testimonial
Route::get('/testimonials', [TestimonialsController::class, 'index']);
Route::post('/testimonials', [TestimonialsController::class, 'store'])->name('testimonials.store');


Route::get('/shop', function () {
    return view('shop');
});