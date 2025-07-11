<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingAdminController;
use App\Http\Controllers\WaitingListController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\OnGoingController;
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
Route::put('/pendingrequest/{id}/update', [BookingAdminController::class, 'update'])->name('pendingrequest.update');


// Waiting List
Route::get('/waitingrequest', [WaitingListController::class,'index'])->name('waitingrequest.index');
Route::get('/waitingrequest/{id}/edit', [WaitingListController::class,'edit'])->name('waitingrequest.edit');
Route::put('/waitingrequest/{id}/update', [WaitingListController::class, 'update'])->name('waitingrequest.update');


// Ongoing Service
Route::get('/ongoingrequest', [BookingAdminController::class, 'ongoing'])->name('ongoingrequest.ongoing');
Route::get('/ongoingrequest/{id}/edit', [OnGoingController::class,'edit'])->name('ongoingrequest.edit');
Route::put('/ongoingingrequest/{id}/update', [OnGoingController::class, 'update'])->name('ongoingrequest.update');


// Service History
Route::get('/history', [BookingAdminController::class, 'history']);


// Testimonial
Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('testimonials.index');
Route::post('/testimonials', [TestimonialsController::class, 'store'])->name('testimonials.store');
Route::get('/testimonials/{id}/edit', [TestimonialsController::class,'edit'])->name('testimonials.edit');
Route::put('/testimonials/{id}/update', [TestimonialsController::class, 'update'])->name('testimonials.update');
Route::delete('/testimonials/{id}/delete', [TestimonialsController::class, 'destroy'])->name('testimonials.delete');


Route::get('/shop', function () {
    return view('shop');
});