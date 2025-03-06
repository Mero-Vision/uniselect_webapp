<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Http\Requests\Application\ApplicationDocumentStoreRequest;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{

    const PASSPORT_COLLECTION = 'passport';
    const OFFER_LETTER_COLLECTION = 'offer_letter';
    const TRANSCRIPT_CERTIFICATE_COLLECTION = 'transcript_certificate';
    const LANGUAGE_TEST_SCORE_COLLECTION = 'language_test_score';
    const BANK_STATEMENT_COLLECTION = 'bank_statement';
    const TUITION_FEE_PAYMENT_COLLECTION = 'tuition_fee_payment';

    public function store(Request $request)
    {
        $request->validate([
            'university_id' => ['required'],
            'course_id' => ['required']
        ]);
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


    public function edit($id)
    {
        $application = Application::find($id);
        return view('students.application.upload_application_documents', compact('application'));
    }

    public function uploadDocuments(ApplicationDocumentStoreRequest $request)
    {
        $application = Application::find($request->application_id);
        if (!$application) {
            return back()->with('error', 'Application Not Found');
        }

        try {
            DB::transaction(function () use ($request, $application) {
                
                $this->handleMediaUpload($request, $application, self::PASSPORT_COLLECTION, 'passport');
                $this->handleMediaUpload($request, $application, self::OFFER_LETTER_COLLECTION, 'offer_letter');
                $this->handleMediaUpload($request, $application, self::TRANSCRIPT_CERTIFICATE_COLLECTION, 'transcript_certificate');
                $this->handleMediaUpload($request, $application, self::LANGUAGE_TEST_SCORE_COLLECTION, 'language_test_score');
                $this->handleMediaUpload($request, $application, self::BANK_STATEMENT_COLLECTION, 'bank_statement');
                $this->handleMediaUpload($request, $application, self::TUITION_FEE_PAYMENT_COLLECTION, 'tuition_fee_payment');
                $application->update([
                    'document_status'=>'submitted'
                ]);
            });

            sweetalert()->addSuccess("Application Document Submitted Successfully!");
            return back();
        } catch (\Exception $e) {
            sweetalert()->addError('An error occurred while uploading documents. Please try again.');
            return back();
        }
    }

    private function handleMediaUpload(Request $request, Application $application, string $collection, string $requestKey)
    {
        if ($request->hasFile($requestKey)) {
            $application->clearMediaCollection($collection);
            $application->addMediaFromRequest($requestKey)->toMediaCollection($collection);
        }
    }
}