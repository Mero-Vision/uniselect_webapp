<?php


use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\UniversityController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login']);



Route::middleware(['auth'])->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('dashboard', [DashboardController::class, 'index']);

    Route::get('settings/profile', [SettingController::class, 'profile']);
    Route::get('settings/company', [SettingController::class, 'company']);
    Route::post('site-setting', [SiteSettingController::class, 'store']);

    Route::get('university', [UniversityController::class, 'index']);
    Route::get('university/create-university', [UniversityController::class, 'create']);
    Route::post('university/create-university', [UniversityController::class, 'store']);

    Route::get('courses', [CourseController::class, 'index']);
    Route::get('courses/create-course', [CourseController::class, 'create']);
    Route::post('courses/create-course', [CourseController::class, 'store']);



});
