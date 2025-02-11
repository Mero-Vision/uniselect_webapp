<?php

use App\Http\Controllers\Students\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AuthController::class,'login']);
