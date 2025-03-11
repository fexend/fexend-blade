<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', fn() => redirect()->route('dashboard'));

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

// Route::get('/dashboard/dashboard-1', function () {
//     return view('welcome');
// })->name('dashboard.dashboard-1');

// Route::get('/dashboard/dashboard-2', function () {
//     return view('welcome');
// })->name('dashboard.dashboard-2');

// Route::get('/dashboard/dashboard-3', function () {
//     return view('welcome');
// })->name('dashboard.dashboard-3');


// Route::get('dashboard/dashboard-4', function () {
//     return view('welcome');
// })->name('dashboard.dashboard-4');

// Route::get('dashboard/dashboard-5', function () {
//     return view('welcome');
// })->name('dashboard.dashboard-5');

// Route::get('dashboard/dashboard-6', function () {
//     return view('welcome');
// })->name('dashboard.dashboard-6');
