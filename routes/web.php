<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formations', function () {
    return view('formation');
})->name('formation');

Route::get('/signaux', function () {
    return view('signals');
})->name('signaux');
