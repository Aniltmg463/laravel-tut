<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//second topic
/* Route::get('/about', function () {
    return view('about');
})->name('myabout');
 */
/* Route::get('/postssss', function () {
    return view('post');
})->name('mypost'); */
/* 
Route::get('post/posts', function () {
    return view('post');
})->name('mypost');

Route::get('/test', function () {
    return view('about');
})->name('myabout'); */

// Route::redirect('/about', '/test');
// Route::redirect('/about', '/test', 301); //301  permanent redirect most used. listed below
/* 
| Status Code | Meaning                                | Usage in Laravel                                          |
| ----------- | -------------------------------------- | --------------------------------------------------------- |
| `302`       | **Found** (default temporary redirect) | `return redirect('home');`                                |
| `301`       | **Moved Permanently**                  | `return redirect('home', 301);`                           |
| `303`       | **See Other** (redirect after POST)    | `return redirect()->route('login')->with('status', 303);` |
| `307`       | **Temporary Redirect**                 | Rarely used manually                                      |
| `308`       | **Permanent Redirect**                 | For strict clients needing method preservation            |
 */


//third topic: ROutes group
Route::group(['prefix' => 'page'], function () {
    Route::get('/about', function () {
        return '<h1>About Page</h1>';
    });

    Route::get('/gallery', function () {
        return '<h1>Gallery Page</h1>';
    });

    Route::get('/post/firstpost', function () {
        return '<h1>First Post Page</h1>';
    });
});

Route::fallback(function () {
    return '<h1>404 Page Not Found</h1>';
});
