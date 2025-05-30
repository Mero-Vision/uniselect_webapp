<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use App\Http\Requests\Customer\CustomerSignUpRequest;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function loginStore(AuthRequest $request)
    {
        try {
            if ($this->authService->attemptLogin([
                'email' => $request->email,
                'password' => $request->password,
            ], $request->filled('remember'))) {

                $user = auth()->user();

                if ($this->authService->checkUserRole($user, User::ADMIN)) {
                    return redirect()->intended('admin/dashboard')
                        ->with('success', 'Welcome back!');
                }

                if ($this->authService->checkUserRole($user, User::STUDENT)) {
                    return redirect()->intended('student/home')
                        ->with('success', 'Welcome back!');
                }

                return redirect()->intended('dashboard')
                    ->with('success', 'Welcome back!');
            }

            return back()
                ->withInput()
                ->with('error', 'Invalid credentials. Please try again.');
        } catch (ValidationException $e) {
            return back()
                ->withErrors($e->errors())
                ->withInput();
        } catch (\Throwable $th) {
            return back()
                ->with('error', 'An error occurred during login. Please try again later.')
                ->withInput();
        }
    }

    public function logout(): RedirectResponse
    {
        $this->authService->logout();

        return redirect('/')->with('success', 'You have been logged out successfully.');
    }



    public function login()
    {
        return view('students.auth.login');
    }

    public function signUp()
    {
        return view('students.auth.signup');
    }



    public function signUpStore(CustomerSignUpRequest $request)
    {
        try {

            $student = DB::transaction(function () use ($request) {
                $student = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password)
                ]);

                $student->assignRole(User::STUDENT);

                return $student;
            });
            if ($student) {
                return back()->with('success', 'Your Account Has Been Created Successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}