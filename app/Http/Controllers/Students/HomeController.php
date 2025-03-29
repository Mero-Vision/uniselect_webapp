<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Course;
use App\Models\University;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        $totalUniversity=University::count();
        $totalCourses=Course::count();
        $totalApplications=Application::count();

        $student = User::role(User::STUDENT)->with('testScores')->find(Auth::user()->id);
        $recommendedCourses = [];
        $warningMessage=null;
        if (!$student || !$student->testScores){
            $warningMessage = 'Test scores not found. Please update your test scores to get course recommendations.';
        }
        $applications=Application::where('student_id',Auth::user()->id)->with('university','course')->latest()->get();
        
        return view('students.home.home',compact('totalUniversity','totalCourses','warningMessage','applications','totalApplications'));
    }
}