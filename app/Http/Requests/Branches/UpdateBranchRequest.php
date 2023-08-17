<?php

namespace App\Http\Requests\Branches;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBranchRequest extends FormRequest
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
            'name' => ['required'],
            'description' => ['nullable'],
            'phone' => ['nullable','min:10'],
            'email' => ['nullable','email'],
            'address' => ['nullable'],
            'location_link' => ['nullable'],
            'status' => ['required'],
        ];
    }
}
