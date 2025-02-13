<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('login',[AuthController::class,'index']);
// Route::post('login',[AuthController::class,'loginStore']);



Route::middleware(['auth'])->group(function () {


});