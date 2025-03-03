<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\University;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $totalUniversity=University::count();
        $totalCourses=Course::count();
        return view('students.home.home',compact('totalUniversity','totalCourses'));
    }
}