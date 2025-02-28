<?php

use App\Http\Controllers\Students\AuthController;
use App\Http\Controllers\Students\HomeController;
use App\Http\Controllers\Students\StudentController;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth'])->group(function () {

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('home',[HomeController::class,'index']);
    Route::get('profile',[StudentController::class,'profile']);
    Route::post('profile',[StudentController::class,'updateStudentDetail']);


});