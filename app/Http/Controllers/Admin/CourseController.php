<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\CourseStoreRequest;
use App\Models\Course;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index()
    {

        $courses = Course::latest()->get();

        return view('admin.courses.courses', compact('courses'));
    }

    public function create()
    {
        $universities = University::latest()->get();
        return view('admin.courses.add_course', compact('universities'));
    }

    public function store(CourseStoreRequest $request)
    {
        try {

            $course = DB::transaction(function () use ($request) {
                $course = Course::create([
                    'university_id' => $request->university_id,
                    'name' => $request->name,
                    'description' => $request->description,
                    'program_level' => $request->program_level,
                    'course_duration' => $request->course_duration,
                    'tuition_fees' => $request->tuition_fees,
                    'application_fees' => $request->application_fees,

                    // IELTS Scores
                    'min_ielts_reading' => $request->min_ielts_reading,
                    'min_ielts_writing' => $request->min_ielts_writing,
                    'min_ielts_listening' => $request->min_ielts_listening,
                    'min_ielts_speaking' => $request->min_ielts_speaking,
                    'min_ielts_overall' => $request->min_ielts_overall,

                    // PTE Scores
                    'min_pte_reading' => $request->min_pte_reading,
                    'min_pte_writing' => $request->min_pte_writing,
                    'min_pte_listening' => $request->min_pte_listening,
                    'min_pte_speaking' => $request->min_pte_speaking,
                    'min_pte_overall' => $request->min_pte_overall,

                    // SAT Scores
                    'min_sat_reading' => $request->min_sat_reading,
                    'min_sat_writing' => $request->min_sat_writing,
                    'min_sat_listening' => $request->min_sat_listening,
                    'min_sat_speaking' => $request->min_sat_speaking,
                    'min_sat_overall' => $request->min_sat_overall,

                    // TOEFL Scores
                    'min_toefl_reading' => $request->min_toefl_reading,
                    'min_toefl_writing' => $request->min_toefl_writing,
                    'min_toefl_listening' => $request->min_toefl_listening,
                    'min_toefl_speaking' => $request->min_toefl_speaking,
                    'min_toefl_overall' => $request->min_toefl_overall,

                ]);

                if ($request->course_image) {
                    $course->addMedia($request->course_image)->toMediaCollection('course_image');
                }
                return $course;
            });
            if ($course) {
                sweetalert()->addSuccess("Course Created Successfully!");
                return back();
            }
        } catch (\Exception $e) {
            return back()->with($e->getMessage(), 500);
        }
    }
}