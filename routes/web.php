<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// })
//     ->middleware('auth', 'verified')
//     ->name('dashboard');

Route::get('/', function () {
    return redirect()->route("dashboard");
});
