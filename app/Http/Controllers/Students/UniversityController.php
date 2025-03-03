<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function index()
    {
        $universities = University::latest()->get();
        return view('students.university.university', compact('universities'));
    }

    public function show($slug){
        $university=University::where('slug',$slug)->first();
        return view('students.university.view_university',compact('university'));
    }
}