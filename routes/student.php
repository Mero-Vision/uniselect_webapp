<?php

use App\Http\Controllers\Students\ApplicationController;
use App\Http\Controllers\Students\AuthController;
use App\Http\Controllers\Students\CourseController;
use App\Http\Controllers\Students\CourseRecommendationController;
use App\Http\Controllers\Students\HomeController;
use App\Http\Controllers\Students\StudentController;
use App\Http\Controllers\Students\StudentTestScoreController;
use App\Http\Controllers\Students\UniversityController;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth'])->group(function () {

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('home',[HomeController::class,'index']);
    Route::get('profile',[StudentController::class,'profile']);
    Route::post('profile',[StudentController::class,'updateStudentDetail']);

    Route::get('university',[UniversityController::class,'index']);
    Route::get('university/{slug}',[UniversityController::class,'show']);

    Route::get('test-scores',[StudentTestScoreController::class,'index']);
    Route::post('test-scores',[StudentTestScoreController::class,'store']);


    Route::get('course-recommendation',[CourseRecommendationController::class,'index']);
    Route::get('courses',[CourseController::class,'index']);
    Route::get('courses/{slug}',[CourseController::class,'show']);

    Route::post('applications',[ApplicationController::class,'store']);




    





});