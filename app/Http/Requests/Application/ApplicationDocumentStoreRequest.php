<?php

namespace App\Http\Requests\Application;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationDocumentStoreRequest extends FormRequest
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
            'passport' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'offer_letter' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'transcript_certificate' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'language_test_score' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bank_statement' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tuition_fee_payment' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}