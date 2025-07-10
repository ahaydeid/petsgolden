<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookingAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/loginadmin', function () {
    return view('loginadmin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/pendingrequest', [BookingAdminController::class,'index']);

Route::get('/onprocessrequest', function () {
    return view('onprocessrequest');
});


Route::get('/booking', [BookingController::class,'index']);


Route::get('/shop', function () {
    return view('shop');
});