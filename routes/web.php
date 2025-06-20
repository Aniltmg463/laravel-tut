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
