<?php

namespace App\Http\Requests\Testimonials;

use Illuminate\Foundation\Http\FormRequest;

class CreateTestimonialRequest extends FormRequest
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
            'establishment_id' => ['required'],
            'title' => ['nullable'],
            'description' => ['required'],
            'author' => ['nullable'],
            'status' => ['nullable'],
            'image' => ['nullable', 'mimes:png,jpg,jpeg'],
        ];
    }
}
