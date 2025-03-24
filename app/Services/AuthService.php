<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class AuthService
{
    public function attemptLogin(array $credentials, bool $remember = false): bool
    {
        $this->ensureIsNotRateLimited($credentials['email']);

        if (Auth::attempt($credentials, $remember)) {
            RateLimiter::clear($this->throttleKey($credentials['email']));
            return true;
        }

        RateLimiter::hit($this->throttleKey($credentials['email']));
        return false;
    }

    public function checkUserRole(User $user, string $role): bool
    {
        return $user->hasRole($role);
    }

    protected function ensureIsNotRateLimited(string $email): void
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey($email), 5)) {
            return;
        }

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => RateLimiter::availableIn($this->throttleKey($email)),
                'minutes' => ceil(RateLimiter::availableIn($this->throttleKey($email)) / 60),
            ]),
        ]);
    }

    public function throttleKey(string $email): string
    {
        return Str::lower($email) . '|' . request()->ip();
    }

    public function logout(): void
    {
        Auth::logout();
    }
}