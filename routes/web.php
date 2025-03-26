<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('users.index');
});

Route::get('/home', function () {
    return view('users.index');
});

Route::get('/about', function () {
    return view('users.about');
});

Route::get('/contact', function () {
    return view('users.contact');
});

Route::get('/blog', function () {
    return view('users.blog');
});

Route::get('/blog-detaild', function () {
    return view('users.blog-detaild');
});


