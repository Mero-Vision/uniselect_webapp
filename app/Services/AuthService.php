<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class AuthService
{
    /**
     * Attempt to log in the user.
     *
     * @param array $credentials
     * @param bool $remember
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(array $credentials, bool $remember = false)
    {
        // Rate limiting to prevent brute-force attacks
        $this->ensureIsNotRateLimited($credentials['email']);

        try {
            // Attempt to authenticate the user
            if (Auth::attempt($credentials, $remember)) {
                $user = Auth::user();

                // Clear login rate limiter
                RateLimiter::clear($this->throttleKey($credentials['email']));

                // Check if the user has the STUDENT role
                if ($user->hasRole(User::STUDENT)) {
                    // Regenerate session ID to prevent session fixation attacks
                    request()->session()->regenerate();

                    sweetalert()->success('Welcome ' . $user->name);
                    return redirect()->intended('student/home');
                } else {

                    return back()->with('warning', 'Unauthorized access attempt.', ['email' => $credentials['email']]);

                    Auth::logout();
                    throw ValidationException::withMessages([
                        'email' => 'You do not have permission to access this area.',
                    ]);
                }
            } else {

                // Increment rate limiter for failed attempts
                RateLimiter::hit($this->throttleKey($credentials['email']));

                return back()->with('warning', 'Invalid email or password. Please try again.');
            }
        } catch (\Throwable $th) {

            Log::error('Login error.', ['error' => $th->getMessage(), 'email' => $credentials['email']]);

            throw $th;
        }
    }


    public function adminLogin(array $credentials, bool $remember = false)
    {
        // Rate limiting to prevent brute-force attacks
        $this->ensureIsNotRateLimited($credentials['email']);

        try {
            // Attempt to authenticate the user
            if (Auth::attempt($credentials, $remember)) {
                $user = Auth::user();

                // Clear login rate limiter
                RateLimiter::clear($this->throttleKey($credentials['email']));

                // Check if the user has the STUDENT role
                if ($user->hasRole(User::ADMIN)) {
                    // Regenerate session ID to prevent session fixation attacks
                    request()->session()->regenerate();

                    sweetalert()->success('Welcome ' . $user->name);
                    return redirect()->intended('admin/dashboard');
                } else {

                    return back()->with('warning', 'Unauthorized access attempt.', ['email' => $credentials['email']]);

                    Auth::logout();
                    throw ValidationException::withMessages([
                        'email' => 'You do not have permission to access this area.',
                    ]);
                }
            } else {

                // Increment rate limiter for failed attempts
                RateLimiter::hit($this->throttleKey($credentials['email']));

                return back()->with('warning', 'Invalid email or password. Please try again.');
            }
        } catch (\Throwable $th) {

            Log::error('Login error.', ['error' => $th->getMessage(), 'email' => $credentials['email']]);

            throw $th;
        }
    }

    /**
     * Ensure the login request is not rate limited.
     */
    protected function ensureIsNotRateLimited(string $email): void
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey($email), 5)) {
            return;
        }

        $seconds = RateLimiter::availableIn($this->throttleKey($email));

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     */
    protected function throttleKey(string $email): string
    {
        return Str::lower($email) . '|' . request()->ip();
    }


    public function logout(): void
    {
        $user = Auth::user();

        if ($user) {
            Auth::logout();

            // Invalidate the session to prevent session fixation attacks
            request()->session()->invalidate();

            // Regenerate the CSRF token
            request()->session()->regenerateToken();

            // Clear cached data for the user
            Cache::forget('user_data_' . $user->id);
        }
    }
}
