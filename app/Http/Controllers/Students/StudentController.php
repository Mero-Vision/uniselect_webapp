<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function profile()
    {
        return view('students.profile.profile');
    }


    public function updateStudentDetail(Request $request)
    {
        $student = User::role(User::STUDENT)->find(Auth::user()->id);
        try {

            $student = DB::transaction(function () use ($request,$student) {
                $student->update([
                    'name'=>$request->name,
                    'mobile_no'=>$request->mobile_no,
                    'address'=>$request->address,
                    'city'=>$request->city
                ]);
                if ($request->profile_image) {
                    $student->clearMediaCollection('profile_image');
                    $student->addMedia($request->profile_image)->toMediaCollection('profile_image');
                }
                return $student;
            });
            if ($student) {
                sweetalert()->addSuccess("Student Detail Updated Successfully!");
                return back();
            }
        } catch (\Exception $e) {
            return back()->with($e->getMessage(), 500);
        }
    }
}
