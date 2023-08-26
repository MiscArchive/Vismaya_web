<?php

namespace App\Http\Requests\Enquiry;

use Illuminate\Foundation\Http\FormRequest;

class EnquiryRequest extends FormRequest
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
        'establishment_id' => ['nullable'],
        'name' => ['required'],
        'email' => ['nullable', 'required_without:telephone'],
        'telephone' => ['nullable', 'required_without:email', 'regex:/^[0-9]{10,}$/'],
        'comments' => ['required'],
        ];
    }
}
