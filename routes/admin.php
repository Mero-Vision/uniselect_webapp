<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('login',[AuthController::class,'index']);
Route::post('login',[AuthController::class,'login']);



Route::middleware(['auth'])->group(function () {

    Route::get('dashboard',[DashboardController::class,'index']);
});