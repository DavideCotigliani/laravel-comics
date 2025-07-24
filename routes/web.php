<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
})->name("home");

// Rotta per i fumetti
Route::get('/comics', function () {
    return view('comics');
})->name("comics");
