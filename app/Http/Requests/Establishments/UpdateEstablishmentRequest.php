<?php

namespace App\Http\Requests\Establishments;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Unique;

class UpdateEstablishmentRequest extends FormRequest
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
            'name' => ['required',Rule::unique('establishments')->ignore($this->establishment->id)],
            'description' => ['required'],
            'logo' => ['nullable','mimes:png,jpg,jpeg'],
            'logo_small' => ['nullable','mimes:png,jpg,jpeg'],
            'status' => ['required'],
            'mobile' =>['nullable'],
            'telephone' =>['nullable'],
            'pincode' =>['nullable'],
            'gmail' =>['nullable'],
            'linkedin' =>['nullable'],
            'facebook'=>['nullable'],
            'district' =>['nullable'],
            'instagram'=>['nullable'],
            'twitter' => ['nullable'],
        ];
    }
}
