<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UniversityController extends Controller
{
    public function index()
    {
        $universities = University::with('country')->latest()->get();
        return view('admin.university.university', compact('universities'));
    }

    public function create()
    {
        $countries = Country::get();
        return view('admin.university.add_university', compact('countries'));
    }

    public function store(Request $request)
    {
        try {

            $university = DB::transaction(function () use ($request) {
                $university = University::create([
                    'country_id' => $request->country_id,
                    'university_id' => $this->generateUniqueOrderNumber(),
                    'name' => $request->name,
                    'description' => $request->description,
                    'address' => $request->address,
                    'city' => $request->city,
                    'website' => $request->website,
                    'email' => $request->email,
                    'phone' => $request->phone,

                ]);

                if ($request->university_image) {
                    $university->addMedia($request->university_image)->toMediaCollection('university_image');
                }
                return $university;
            });
            if ($university) {
                sweetalert()->addSuccess("University Created Successfully!");
                return back();
            }
        } catch (\Exception $e) {
            sweetalert()->addError($e->getMessage());
            return back();
        }
    }

    function generateUniqueOrderNumber()
    {
        $date = date('Ymd');

        // Find the latest university_id matching today's pattern
        $latestOrder = University::where('university_id', 'like', 'UNI' . $date . '%')
            ->orderBy('university_id', 'desc')
            ->first();

        if ($latestOrder) {
            // Extract the last 2-digit increment from the latest order ID
            $lastIncrement = (int) substr($latestOrder->university_id, -2);
            $increment = $lastIncrement + 1;
        } else {
            $increment = 1;
        }

        // Ensure the increment is always 2 digits
        $increment = str_pad($increment, 2, '0', STR_PAD_LEFT);

        // Construct the new unique order number
        $orderNumber = 'UNI' . $date . $increment;

        return $orderNumber;
    }
}