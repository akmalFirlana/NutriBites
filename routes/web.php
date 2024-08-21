<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/home', function () {
    return view('home.homepage');
});

Route::get('/detail', function () {
    return view('product_detail.prodetail');
});

Route::get('/cart', function () {
    return view('cart.cart');
});

Route::get('/daftar', function () {
    return view('formpenjual.daftar');
});