<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index(){
        $applications=Application::with('university','course','student')->latest()->get();
        return view('admin.students.student_application',compact('applications'));
    }
}