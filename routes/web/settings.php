<?php

use App\Http\Controllers\Settings\PermissionController;
use App\Http\Controllers\Settings\RoleController;
use App\Http\Controllers\Settings\SettingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SettingController::class, 'index'])->name('index');

Route::get('role/get-data', [RoleController::class, 'getData'])->name('role.get-data');
Route::resource('role', RoleController::class);

Route::get('permission/get-data', [PermissionController::class, 'getData'])->name('permission.get-data');
Route::resource('permission', PermissionController::class)->except(['show']);
