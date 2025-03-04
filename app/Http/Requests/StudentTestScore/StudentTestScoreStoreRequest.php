<?php

namespace App\Http\Requests\StudentTestScore;

use Illuminate\Foundation\Http\FormRequest;

class StudentTestScoreStoreRequest extends FormRequest
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
            'ielts_reading' => 'nullable|numeric|min:0|max:10',
            'ielts_writing' => 'nullable|numeric|min:0|max:10',
            'ielts_listening' => 'nullable|numeric|min:0|max:10',
            'ielts_speaking' => 'nullable|numeric|min:0|max:10',
            'ielts_overall' => 'nullable|numeric|min:0|max:10',

            'pte_reading' => 'nullable|numeric|min:0|max:10',
            'pte_writing' => 'nullable|numeric|min:0|max:10',
            'pte_listening' => 'nullable|numeric|min:0|max:10',
            'pte_speaking' => 'nullable|numeric|min:0|max:10',
            'pte_overall' => 'nullable|numeric|min:0|max:10',

            'sat_reading' => 'nullable|numeric|min:0|max:10',
            'sat_writing' => 'nullable|numeric|min:0|max:10',
            'sat_listening' => 'nullable|numeric|min:0|max:10',
            'sat_speaking' => 'nullable|numeric|min:0|max:10',
            'sat_overall' => 'nullable|numeric|min:0|max:10',

            'toefl_reading' => 'nullable|numeric|min:0|max:10',
            'toefl_writing' => 'nullable|numeric|min:0|max:10',
            'toefl_listening' => 'nullable|numeric|min:0|max:10',
            'toefl_speaking' => 'nullable|numeric|min:0|max:10',
            'toefl_overall' => 'nullable|numeric|min:0|max:10',
        ];
    }

    /**
     * Custom validation messages.
     */
    public function messages(): array
    {
        return [
            '*.numeric' => 'The :attribute must be a number.',
            '*.min' => 'The :attribute must be at least :min.',
            '*.max' => 'The :attribute must not exceed :max.',
        ];
    }
}