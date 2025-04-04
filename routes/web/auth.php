<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::get("login", [AuthController::class, 'login'])->name("login");
    Route::post("login", [AuthController::class, 'loginPost'])->name("login.post");

    Route::get("register", [RegisterController::class, 'register'])->name("register");
    Route::post("register", [RegisterController::class, 'registerPost'])->name("register.post");

    Route::get('verify-email/{token}', [RegisterController::class, 'verifyEmail'])->name('verify.email');
});

Route::group(['middleware' => 'auth'], function () {
    Route::post("logout", [AuthController::class, 'logout'])->name("logout");
});
