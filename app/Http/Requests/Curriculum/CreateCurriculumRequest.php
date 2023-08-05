<?php

namespace App\Http\Requests\Curriculum;

use Illuminate\Foundation\Http\FormRequest;

class CreateCurriculumRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'syllabus' => ['nullable'],
            'age' => ['nullable'],
            'duration' => ['nullable'],
            'fee' => ['nullable'],
            'class_size' => ['nullable'],
            'intervals' => ['nullable'],
            'description' => ['required'],
            'title_image' => ['nullable','mimes:png,jpg,jpeg'],
            'main_image' => ['nullable','mimes:png,jpg,jpeg'],
        ];
    }
}
