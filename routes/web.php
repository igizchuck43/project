<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::view('/', 'home')->name('home');
Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');
