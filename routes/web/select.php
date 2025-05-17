<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('role', [\App\Http\Controllers\Select\SelectOptionController::class, 'selectRole'])->name('role');
});
