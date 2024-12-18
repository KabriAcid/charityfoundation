<?php

use Illuminate\Support\Facades\Route;

// Public Pages
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/programs', function () {
    return view('programs');
})->name('programs');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');

// Admin Dashboard
Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
