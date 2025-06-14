<?php

use App\Http\Controllers\UserController;
// use App\Http\Controllers\CommentContoller;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

//Normal Routes:
// Route::get('/', function () {
//     return view('welcome');
// });


//Single Resource Controller Route:
Route::resource('users', UserController::class); //use for  all method
// Route::resource('users', UserController::class)->only(['create', 'update', 'show']);
// Route::resource('users', UserController::class)->names(['create' => 'users.build', 'show' => 'users.view']);

//Nested Resources  Controller Route:
// Route::resource('users.comments', CommentController::class);
Route::resource('users.comments', CommentController::class)->shallow(); /* mUse the full nested route only for routes that need the parent (user) — like index, create, store. For routes that act on a single comment, remove the user part from the URL. */