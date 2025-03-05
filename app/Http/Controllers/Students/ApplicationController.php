<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        try {

            $application = DB::transaction(function () use ($request) {
                $application = Application::create([
                    'student_id' => Auth::user()->id,
                    'university_id' => $request->university_id,
                    'course_id' => $request->course_id,
                ]);

                return $application;
            });
            if ($application) {
                sweetalert()->addSuccess("Application Created Successfully!");
                return back();
            }
        } catch (\Exception $e) {
            sweetalert()->addError($e->getMessage());
            return back();
        }
    }
}