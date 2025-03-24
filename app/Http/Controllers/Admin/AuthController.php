<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function index(){
        return view('admin.auth.login');
    }

    public function login(AuthRequest $request)
    {
        try {
            if ($this->authService->attemptLogin([
                'email' => $request->email,
                'password' => $request->password,
            ], $request->filled('remember'))) {

                $user = auth()->user();

                if ($this->authService->checkUserRole($user, User::ADMIN)) {
                    return redirect()->intended('admin/dashboard')
                        ->with('success', 'Welcome back, Administrator!');
                }

                if ($this->authService->checkUserRole($user, User::STUDENT)) {
                    return redirect()->intended('student/home')
                        ->with('success', 'Welcome back, Administrator!');
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
}