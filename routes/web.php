<?php

use App\Http\Controllers\UserController;
// use App\Http\Controllers\CommentContoller;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//Normal Routes:
Route::get('/', function () {
    return view('welcome', ['name' => 'Laravel 12', 'word' => 'Framework']);
});


//Single Resource Controller Route:
Route::resource('users', UserController::class); //use for  all method
// Route::resource('users', UserController::class)->only(['create', 'update', 'show']);
// Route::resource('users', UserController::class)->names(['create' => 'users.build', 'show' => 'users.view']);

//Multipel Resource Controller
Route::resources([
    'photos' => PhotoController::class,
    'posts' => PostController::class,
]);

//Nested Resources  Controller Route:
// Route::resource('users.comments', CommentController::class);
Route::resource('users.comments', CommentController::class)->shallow(); /* Use the full nested route only for routes that need the parent (user) — like index, create, store. For routes that act on a single comment, remove the user part from the URL. */