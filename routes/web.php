<?php

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

Route::get('/booking', function () {
    return view('booking');
});


Route::get('/shop', function () {
    return view('shop');
});