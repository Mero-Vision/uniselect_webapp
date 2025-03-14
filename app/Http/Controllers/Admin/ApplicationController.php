<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;
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

        return view('admin.students.view_student_application', compact(
            'application',
            'passportExtractedText',
            'offerLetterExtractedText',
            'transcriptCertificateExtractedText',
            'languageTestScoreExtractedText',
            'bankStatementExtractedText',
            'tuitionFeePaymentExtractedText'
        ));
    }
}