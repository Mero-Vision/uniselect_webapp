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
            'course_image' => ['required', 'image']
        ];
    }
}
