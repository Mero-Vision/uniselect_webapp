<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class CustomerSignUpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', 'regex:/^[\pL\s\-]+$/u'], // Allows letters, spaces, and hyphens
            'email' => ['required', 'string', 'email:rfc,dns', 'max:255', 'unique:users,email'], // Ensures valid and unique email
            'password' => [
                'required',
                'string',
                Password::min(8) // Minimum length of 8
                    ->mixedCase() // Requires at least one uppercase and one lowercase letter
                    ->numbers() // Requires at least one number
                    ->symbols() // Requires at least one symbol
                    ->uncompromised(), // Checks if the password has been leaked in data breache
                'confirmed', // Ensures `password` matches `password_confirmation`
            ],
            'password_confirmation' => ['required', 'string'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'name' => filter_var($this->name, FILTER_SANITIZE_STRING), // Sanitize name
            'email' => filter_var($this->email, FILTER_SANITIZE_EMAIL), // Sanitize email
        ]);
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The name field is required.',
            'name.regex' => 'The name may only contain letters, spaces, and hyphens.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'The email has already been taken.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters.',
            'password.mixed_case' => 'The password must contain at least one uppercase and one lowercase letter.',
            'password.numbers' => 'The password must contain at least one number.',
            'password.symbols' => 'The password must contain at least one symbol.',
            'password.uncompromised' => 'The password has been compromised in a data breach. Please choose a different password.',
            'password.confirmed' => 'The password confirmation does not match.',
            'password_confirmation.required' => 'The password confirmation field is required.',
        ];
    }
}
