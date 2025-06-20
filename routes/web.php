<?php

use App\Http\Controllers\AuthControllers;
use Illuminate\Support\Facades\Route;

// Default Welcome Page
Route::get('/', function () {
    return view('welcome');
});

// Authenticated User Home Page
Route::get('/user', function () {
    return view('home');
});

// Login Page Route
Route::get('/login', [AuthControllers::class, 'ShowLoginForm'])->name('login');
Route::post('/login', [AuthControllers::class, 'login'])->name('submitlogin');
Route::get('/dashboard', [AuthControllers::class, 'dashboard'])->name('dashboard');
Route::post('/logout', [AuthControllers::class, 'logout'])->name('logout');

//decrption password try
Route::get('/decrpyt', [AuthControllers::class, 'showDecryptedPassword'])->name('DescryptedPassword');
