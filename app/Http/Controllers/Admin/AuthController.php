<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
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
            return $this->authService->adminLogin([
                'email' => $request->email,
                'password' => $request->password,
            ], $request->filled('remember'));
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Throwable $th) {
            return back()->with('error', 'An error occurred during login. Please try again later.');
        }
    }

    public function logout(): RedirectResponse
    {
        $this->authService->logout();

        return redirect('/')->with('success', 'You have been logged out successfully.');
    }
}
