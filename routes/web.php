<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/expertise', function () {
    return view('expertise');
});

Route::get('/my-work', function () {
    return view('my-work');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/contact', function () {
    return view('contact');
});
