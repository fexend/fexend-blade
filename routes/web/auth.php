<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get("login", [AuthController::class, 'login'])->name("login");
Route::post("login", [AuthController::class, 'loginPost'])->name("login.post");

Route::group(['middleware' => 'auth'], function () {
    Route::post("logout", [AuthController::class, 'logout'])->name("logout");
});
