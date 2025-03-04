<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseRecommendationController extends Controller
{
    public function index()
    {
        $student = User::role(User::STUDENT)->with('testScores')->find(Auth::user()->id);
        $recommendedCourses = [];
        if (!$student || !$student->testScores) {
            $warningMessage = 'Test scores not found. Please update your test scores to get course recommendations.';
            return view('students.course_recommendation.course_recommendation', compact('recommendedCourses','warningMessage'));
        }

        $scores = $student->testScores; 

        $recommendedCourses = Course::where(function ($query) use ($scores) {
            if (!is_null($scores->ielts)) {
                $query->orWhere('min_ielts', '<=', $scores->ielts);
            }
            if (!is_null($scores->pte)) {
                $query->orWhere('min_pte', '<=', $scores->pte);
            }
            if (!is_null($scores->sat)) {
                $query->orWhere('min_sat', '<=', $scores->sat);
            }
            if (!is_null($scores->toefl)) {
                $query->orWhere('min_toefl', '<=', $scores->toefl);
            }
        })->get();

        return view('students.course_recommendation.course_recommendation', compact('recommendedCourses', 'student'));
    }
}