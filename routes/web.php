<?php

use Illuminate\Support\Facades\Route;

Route::get('/homepage', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome2');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/contact', function () {
    return view('contact');
});
