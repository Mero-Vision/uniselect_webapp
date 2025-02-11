<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\CustomerSignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('students.auth.login');
    }

    public function signUp(){
        return view('students.auth.signup');
    }

    public function signUpStore(CustomerSignUpRequest $request){
        try {

            $student = DB::transaction(function () use ($request) {
                $student = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password'=>Hash::make($request->password)
                ]);

                $student->assignRole(User::STUDENT);
               
                return $student;
            });
            if ($student) {
                return back()->with('success','Your Account Has Been Created Successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('error',$e->getMessage());
        }
    }
}
