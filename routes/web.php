<?php

//use Illuminate\Support\Facades\Route;

// Route::get('/', function(){
//     return view('index');
// });

Route::get('/', 'PostController@index');

Route::get('/posts/{post}', 'PostController@show');