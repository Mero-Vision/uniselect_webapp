<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('login',[AuthController::class,'index']);
Route::post('login',[AuthController::class,'login']);



Route::middleware(['auth'])->group(function () {


});