<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->get();
        return view('students.courses.courses', compact('courses'));
    }

    public function show($slug)
    {

        $course = Course::where('slug', $slug)->first();
        return view('students.courses.view_course', compact('course'));
    }
}