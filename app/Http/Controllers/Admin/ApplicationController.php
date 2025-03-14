<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Course;
use App\Models\University;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use thiagoalessio\TesseractOCR\TesseractOCR;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::with('university', 'course', 'student')->latest()->get();
        return view('admin.students.student_application', compact('applications'));
    }

    public function show($id)
    {

        $application = Application::find($id);

        $passportPath = $application->getFirstMediaPath('passport');
        $passportExtractedText = (new TesseractOCR($passportPath))->run();

        $offerLetterPath = $application->getFirstMediaPath('offer_letter');
        $offerLetterExtractedText = (new TesseractOCR($offerLetterPath))->run();

        $transcriptCertificatePath = $application->getFirstMediaPath('transcript_certificate');
        $transcriptCertificateExtractedText = (new TesseractOCR($transcriptCertificatePath))->run();

        $languageTestScorePath = $application->getFirstMediaPath('language_test_score');
        $languageTestScoreExtractedText = (new TesseractOCR($languageTestScorePath))->run();

        $bankStatementPath = $application->getFirstMediaPath('bank_statement');
        $bankStatementExtractedText = (new TesseractOCR($bankStatementPath))->run();

        $tuitionFeePaymentPath = $application->getFirstMediaPath('tuition_fee_payment');
        $tuitionFeePaymentExtractedText = (new TesseractOCR($tuitionFeePaymentPath))->run();

        $student=User::find($application->student_id);
        $university=University::find($application->university_id);
        $course=Course::find($application->course_id);



        return view('admin.students.view_student_application', compact(
            'application',
            'passportExtractedText',
            'offerLetterExtractedText',
            'transcriptCertificateExtractedText',
            'languageTestScoreExtractedText',
            'bankStatementExtractedText',
            'tuitionFeePaymentExtractedText',
            'student',
            'university',
            'course'
        ));
    }

    public function updateStatus(Request $request,$id)
    {

        $application = Application::find($id);
        if (!$application) {
            return back()->with('error','Application Not Found');
        }

        try {
            $application = DB::transaction(function () use ($request,$application) {

                if ($request->status == "approved") {

                    $application->update([
                        'application_status' => "approved"
                    ]);
                } elseif ($request->status == "rejected") {

                    $application->update([
                        'application_status' => "rejected"
                    ]);
                }
            });
            sweetalert()->addSuccess("Status Updated Successfully!");
            return back();
        } catch (\Exception $e) {
            return back()->with($e->getMessage(), 500);
        }
    }
}