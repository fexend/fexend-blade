<?php

use Illuminate\Support\Facades\Route;

Route::get('file/{file}', [\App\Http\Controllers\Global\FileResponseController::class, 'responseFile'])->name('file.response');
Route::get('file/download/{file}', [\App\Http\Controllers\Global\FileResponseController::class, 'responseFileDownload'])->name('file.download');
