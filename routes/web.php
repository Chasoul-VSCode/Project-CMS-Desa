<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Auth
Route::get('/auth/login', function () {
    return view('auth.login');
});


// Dashboard
Route::match(['get', 'post'], '/app/dashboard', function () {
    return view('app.dashboard');
});

Route::match(['get', 'post'], '/pages/home', function () {
    return view('pages.home');
});

Route::match(['get', 'post'], '/pages/agenda', function () {
    return view('pages.agenda');
});
