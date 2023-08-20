<?php

namespace App\Http\Requests\Establishments;

use Illuminate\Foundation\Http\FormRequest;

class CreateEstablishmentRequest extends FormRequest
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
            'name' => ['required','unique:establishments,name'],
            'description' => ['required'],
            'logo' => ['nullable','mimes:png,jpg,jpeg'],
            'logo_small' => ['nullable','mimes:png,jpg,jpeg'],
        ];
    }
}
