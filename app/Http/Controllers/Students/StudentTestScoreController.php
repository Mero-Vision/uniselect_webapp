<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentTestScore\StudentTestScoreStoreRequest;
use App\Models\StudentTestScore;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentTestScoreController extends Controller
{
    public function index()
    {
        $student = User::role(User::STUDENT)->with('testScores')->find(Auth::user()->id);
        $recommendedCourses = [];
        $warningMessage = null;
        if (!$student || !$student->testScores) {
            $warningMessage = 'Test scores not found. Please update your test scores to get course recommendations.';
        }
        $studentTestScore=StudentTestScore::where('student_id', Auth::user()->id)->first();
        return view('students.test_score.student_test_score', compact('warningMessage','studentTestScore'));
    }


    public function store(StudentTestScoreStoreRequest $request)
    {
        // Check if any test score already exists for the authenticated user
        $existingTestScore = StudentTestScore::where('student_id', Auth::user()->id)->first();

        // If a test score exists, allow only updating it
        if ($existingTestScore) {
            try {
                // Use a transaction to ensure data integrity
                DB::transaction(function () use ($request, $existingTestScore) {
                    // Update the existing test score
                    $existingTestScore->update([
                        'ielts_reading' => $request->ielts_reading,
                        'ielts_writing' => $request->ielts_writing,
                        'ielts_listening' => $request->ielts_listening,
                        'ielts_speaking' => $request->ielts_speaking,
                        'ielts_overall' => $request->ielts_overall,

                        'pte_reading' => $request->pte_reading,
                        'pte_writing' => $request->pte_writing,
                        'pte_listening' => $request->pte_listening,
                        'pte_speaking' => $request->pte_speaking,
                        'pte_overall' => $request->pte_overall,

                        'sat_reading' => $request->sat_reading,
                        'sat_writing' => $request->sat_writing,
                        'sat_listening' => $request->sat_listening,
                        'sat_speaking' => $request->sat_speaking,
                        'sat_overall' => $request->sat_overall,

                        'toefl_reading' => $request->toefl_reading,
                        'toefl_writing' => $request->toefl_writing,
                        'toefl_listening' => $request->toefl_listening,
                        'toefl_speaking' => $request->toefl_speaking,
                        'toefl_overall' => $request->toefl_overall
                    ]);
                });

                // Show success message for update
                sweetalert()->addSuccess("Test Score Has Been Updated Successfully!");
                return back();
            } catch (\Exception $e) {
                // Handle any exceptions and show error message
                return back()->with('error', $e->getMessage());
            }
        }

        // If no test score exists, allow creating a new one
        try {
            // Use a transaction to ensure data integrity
            $studentTestScore = DB::transaction(function () use ($request) {
                // Create a new test score record
                return StudentTestScore::create([
                    'student_id' => Auth::user()->id,
                    'ielts_reading' => $request->ielts_reading,
                    'ielts_writing' => $request->ielts_writing,
                    'ielts_listening' => $request->ielts_listening,
                    'ielts_speaking' => $request->ielts_speaking,
                    'ielts_overall' => $request->ielts_overall,

                    'pte_reading' => $request->pte_reading,
                    'pte_writing' => $request->pte_writing,
                    'pte_listening' => $request->pte_listening,
                    'pte_speaking' => $request->pte_speaking,
                    'pte_overall' => $request->pte_overall,

                    'sat_reading' => $request->sat_reading,
                    'sat_writing' => $request->sat_writing,
                    'sat_listening' => $request->sat_listening,
                    'sat_speaking' => $request->sat_speaking,
                    'sat_overall' => $request->sat_overall,

                    'toefl_reading' => $request->toefl_reading,
                    'toefl_writing' => $request->toefl_writing,
                    'toefl_listening' => $request->toefl_listening,
                    'toefl_speaking' => $request->toefl_speaking,
                    'toefl_overall' => $request->toefl_overall
                ]);
            });

            // Show success message for creation
            if ($studentTestScore) {
                sweetalert()->addSuccess("Test Score Has Been Added Successfully!");
            }

            return back();
        } catch (\Exception $e) {
            // Handle any exceptions and show error message
            return back()->with('error', $e->getMessage());
        }
    }
}