<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::get("login", [AuthController::class, 'login'])->name("login");
    Route::post("login", [AuthController::class, 'loginPost'])->name("login.post");

    Route::get("register", [RegisterController::class, 'register'])->name("register");
    Route::post("register", [RegisterController::class, 'registerPost'])->name("register.post");
    Route::get('resend-verification-email', [RegisterController::class, 'resendVerificationEmail'])->name('resend.verification.email');
    Route::post('resend-verification-email', [RegisterController::class, 'resendVerificationEmailPost'])->name('resend.verification.email.post');
    Route::get('verify-email/{token}', [RegisterController::class, 'verifyEmail'])->name('verify.email');

    Route::get("forgot-password", [ForgotPasswordController::class, 'forgotPassword'])->name("forgot.password");
    Route::post("forgot-password", [ForgotPasswordController::class, 'sendResetLinkEmail'])->name("forgot.password.post");
    Route::get("reset-password/{token}", [ForgotPasswordController::class, 'showResetForm'])->name("reset.password");
    Route::post("reset-password", [ForgotPasswordController::class, 'resetPassword'])->name("reset.password.post");
});

Route::group(['middleware' => 'auth'], function () {

    Route::get("profile", [\App\Http\Controllers\Auth\ProfileController::class, 'index'])->name("profile");
    Route::post("profile", [\App\Http\Controllers\Auth\ProfileController::class, 'update'])->name("profile.update");

    Route::post("profile/password", [\App\Http\Controllers\Auth\ProfileController::class, 'updatePassword'])->name("profile.password.post");

    Route::post("logout", [AuthController::class, 'logout'])->name("logout");
});
