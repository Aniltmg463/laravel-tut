<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//only for routing topic day1
// Route::get('/post', function () {
//     return view('post');
//     //return "<h1>Post Page</h1>";
// });

// //alternative method to write route
// // Route :: view('post','/post');

// //sub routing eg
// Route::get('/post/firstpost', function () {
//     return view('firstpost');
//     //return "<h1>Post Page</h1>";
// });

//day2 for routing parameter
// Route::get('/post/{id?}', function (string $id=null) {
//     // return view('firstpost');
//     return "<h1>Post ID:" . $id . "</h1>";
// });

// Route::get('/post/{id?}', function (string $id=null) {
//     if($id){
//         return "<h1>Post ID:" . $id . "</h1>";
//     }else{
//         return "<h1>No ID found</h1>";
//     }
// });

//multuple roting parameter
// Route::get('/post/{id?}/comment/{comment?}', function (string $id=null, string $comment=null) {
//     if($id){
//         return "<h1>Post ID: " . $id . "</h1><h2>Comment ID: " . $comment . "</h2>";
//     }else{
//         return "<h1>No ID found</h1>";
//     }
// });

// //Route constraint day2
// Route::get('/post/{id}', function (string $id) {
//     if($id){
//         return "<h1>Post ID: " . $id . "</h1>";
//     }else{
//         return "<h1>No ID found</h1>";
//     }
// // })->whereNumber('id'); //numeica value
// // })->whereAlpha('id'); //alpha value
// // })->whereAlphaNumeric('id'); //alpha n num value
// // })->whereIn('id',['movie','song','painting']);
// // })->where('id',[0-9]+''); //regular expression fro numeric value
// })->where('id','[a-zA-Z]+'); //regular expression fro alphabate value

// /* multiple route constraint */
Route::get('/post/{id}/comment/{commentid}', function (string $id, string $comment) {
    if($id){
        return "<h1>Post ID: " . $id . "& Comment: ". $comment . "</h1>";
    }else{
        return "<h1>No ID found</h1>";
    }
// })->whereNumber('id'); //numeica value
// })->whereAlpha('id'); //alpha value
// })->whereAlphaNumeric('id'); //alpha n num value
// })->whereIn('id',['movie','song','painting']);
// })->where('id',[0-9]+''); //regular expression fro numeric value
})->where('id','[0-9]+')->whereAlpha('commentid'); //regular expression fro alphabate v

