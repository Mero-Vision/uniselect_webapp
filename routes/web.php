<?php

use App\Http\Controllers\Students\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AuthController::class,'login']);
Route::post('login',[AuthController::class,'loginStore']);
Route::get('sign-up',[AuthController::class,'signUp']);
Route::post('sign-up',[AuthController::class,'signUpStore']);


Route::middleware(['auth'])->group(function () {


});