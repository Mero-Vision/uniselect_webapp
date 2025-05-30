<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students=User::role(User::STUDENT)->latest()->get();
        return view('admin.students.student',compact('students'));
    }
}