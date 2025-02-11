<?php

use App\Http\Controllers\Students\AuthController;
use App\Http\Controllers\Students\HomeController;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth'])->group(function () {

    Route::get('home',[HomeController::class,'index']);
});