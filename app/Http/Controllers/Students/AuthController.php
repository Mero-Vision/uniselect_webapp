<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('students.auth.login');
    }

    public function signUp(){
        return view('students.auth.signup');
    }
}
