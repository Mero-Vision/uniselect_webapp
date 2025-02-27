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
