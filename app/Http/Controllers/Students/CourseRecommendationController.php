<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\Application;
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
        $warningMessage = null;
        if (!$student || !$student->testScores) {
            $warningMessage = 'Test scores not found. Please update your test scores to get course recommendations.';
            return view('students.course_recommendation.course_recommendation', compact('recommendedCourses', 'warningMessage'));
        }

        $scores = $student->testScores;

        $recommendedCourses = Course::where(function ($query) use ($scores) {
            // IELTS
            $query->where(function ($q) use ($scores) {
                $q->whereNotNull('min_ielts_reading')->where('min_ielts_reading', '<=', $scores->ielts_reading ?? 0)
                    ->whereNotNull('min_ielts_writing')->where('min_ielts_writing', '<=', $scores->ielts_writing ?? 0)
                    ->whereNotNull('min_ielts_listening')->where('min_ielts_listening', '<=', $scores->ielts_listening ?? 0)
                    ->whereNotNull('min_ielts_speaking')->where('min_ielts_speaking', '<=', $scores->ielts_speaking ?? 0)
                    ->whereNotNull('min_ielts_overall')->where('min_ielts_overall', '<=', $scores->ielts_overall ?? 0);
            })
                // PTE
                ->orWhere(function ($q) use ($scores) {
                    $q->whereNotNull('min_pte_reading')->where('min_pte_reading', '<=', $scores->pte_reading ?? 0)
                        ->whereNotNull('min_pte_writing')->where('min_pte_writing', '<=', $scores->pte_writing ?? 0)
                        ->whereNotNull('min_pte_listening')->where('min_pte_listening', '<=', $scores->pte_listening ?? 0)
                        ->whereNotNull('min_pte_speaking')->where('min_pte_speaking', '<=', $scores->pte_speaking ?? 0)
                        ->whereNotNull('min_pte_overall')->where('min_pte_overall', '<=', $scores->pte_overall ?? 0);
                })
                // SAT
                ->orWhere(function ($q) use ($scores) {
                    $q->whereNotNull('min_sat_reading')->where('min_sat_reading', '<=', $scores->sat_reading ?? 0)
                        ->whereNotNull('min_sat_writing')->where('min_sat_writing', '<=', $scores->sat_writing ?? 0)
                        ->whereNotNull('min_sat_listening')->where('min_sat_listening', '<=', $scores->sat_listening ?? 0)
                        ->whereNotNull('min_sat_speaking')->where('min_sat_speaking', '<=', $scores->sat_speaking ?? 0)
                        ->whereNotNull('min_sat_overall')->where('min_sat_overall', '<=', $scores->sat_overall ?? 0);
                })
                // TOEFL
                ->orWhere(function ($q) use ($scores) {
                    $q->whereNotNull('min_toefl_reading')->where('min_toefl_reading', '<=', $scores->toefl_reading ?? 0)
                        ->whereNotNull('min_toefl_writing')->where('min_toefl_writing', '<=', $scores->toefl_writing ?? 0)
                        ->whereNotNull('min_toefl_listening')->where('min_toefl_listening', '<=', $scores->toefl_listening ?? 0)
                        ->whereNotNull('min_toefl_speaking')->where('min_toefl_speaking', '<=', $scores->toefl_speaking ?? 0)
                        ->whereNotNull('min_toefl_overall')->where('min_toefl_overall', '<=', $scores->toefl_overall ?? 0);
                });
        })->get();

        $appliedCourses = Application::where('student_id', Auth::user()->id)->pluck('course_id')->toArray();


        return view('students.course_recommendation.course_recommendation', compact('recommendedCourses', 'student', 'warningMessage', 'appliedCourses'));
    }
}