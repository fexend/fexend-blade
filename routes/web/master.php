<?php

use App\Http\Controllers\Master\MasterController;
use App\Http\Controllers\Master\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MasterController::class, 'index'])->name('index');

Route::get('user/get-data', [UserController::class, 'getData'])->name('user.get-data');
Route::post('user/{id?}/update-password', [UserController::class, 'updatePassword'])->name('user.update-password');
Route::resource('user', UserController::class);
