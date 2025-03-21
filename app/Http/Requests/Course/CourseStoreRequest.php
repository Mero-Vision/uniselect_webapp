<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class CourseStoreRequest extends FormRequest
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
            'university_id'    => 'required|exists:universities,id',
            'name'             => 'required|string|max:255',
            'description'      => 'required|string',
            'program_level'    => 'required|string|in:Bachelor,Master,PhD,Diploma',
            'course_duration'  => 'required|integer|min:1',
            'tuition_fees'     => 'required|numeric|min:0',
            'application_fees' => 'nullable|numeric|min:0',
            'course_image' => ['required', 'image'],

            // IELTS Scores
            'min_ielts_reading' => 'nullable|numeric|min:0|max:10',
            'min_ielts_writing' => 'nullable|numeric|min:0|max:10',
            'min_ielts_listening' => 'nullable|numeric|min:0|max:10',
            'min_ielts_speaking' => 'nullable|numeric|min:0|max:910',
            'min_ielts_overall' => 'nullable|numeric|min:0|max:10',

            // PTE Scores
            'min_pte_reading' => 'nullable|integer|min:0|max:100',
            'min_pte_writing' => 'nullable|integer|min:0|max:100',
            'min_pte_listening' => 'nullable|integer|min:0|max:100',
            'min_pte_speaking' => 'nullable|integer|min:0|max:100',
            'min_pte_overall' => 'nullable|integer|min:0|max:100',

            // SAT Scores
            'min_sat_reading' => 'nullable|integer|min:0|max:100',
            'min_sat_writing' => 'nullable|integer|min:0|max:100',
            'min_sat_listening' => 'nullable|integer|min:0|max:100',
            'min_sat_speaking' => 'nullable|integer|min:0|max:100',
            'min_sat_overall' => 'nullable|integer|min:0|max:100',

            // TOEFL Scores
            'min_toefl_reading' => 'nullable|integer|min:0|max:100',
            'min_toefl_writing' => 'nullable|integer|min:0|max:100',
            'min_toefl_listening' => 'nullable|integer|min:0|max:100',
            'min_toefl_speaking' => 'nullable|integer|min:0|max:100',
            'min_toefl_overall' => 'nullable|integer|min:0|max:100',
        ];
    }
}