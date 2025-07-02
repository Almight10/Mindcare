<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/dokterprofil', function () {
    return view('dokterprofil');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
