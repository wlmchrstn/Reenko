<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('page/landing');
});

Route::get('/home','App\Http\Controllers\PostController@index');

Route::post('user/store', 'App\Http\Controllers\UserController@store');

Route::get('user/login', 'App\Http\Controllers\UserController@login');

Route::get('user/logout', 'App\Http\Controllers\UserController@logout');

Route::post('post/store', 'App\Http\Controllers\PostController@store');

Route::post('comment/store', '\App\Http\Controllers\CommentController@store');
