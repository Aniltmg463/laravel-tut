<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', function () {
    return view('post');
    //return "<h1>Post Page</h1>";
});

//alternative method to write route
// Route :: view('post','/post');

//sub routing eg
Route::get('/post/firstpost', function () {
    return view('firstpost');
    //return "<h1>Post Page</h1>";
});