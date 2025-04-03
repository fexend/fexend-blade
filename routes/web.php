<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', fn() => redirect()->route('dashboard'));

Route::get('/', function (Request $request) {
    return view('welcome');
})
    ->middleware('auth')
    ->name('dashboard');
