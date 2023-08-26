<?php

namespace App\Http\Requests\Banner;

use Illuminate\Foundation\Http\FormRequest;

class CreateBannerRequest extends FormRequest
{
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
            'description' => ['nullable'],
            'status' => ['nullable'],
            'image' => ['nullable', 'mimes:png,jpg,jpeg'],
        ];
    }
}
