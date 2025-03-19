<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');
