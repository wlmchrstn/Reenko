<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page/landing');
});

Route::get('/home', function () {
    return view('page/home');
});

Route::get('/component', function () {
    return view('component/post');
});

Route::get('/navbar', function () {
    return view('component/navbar');
});
