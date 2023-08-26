<?php

namespace App\Http\Requests\CardItems;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCardItemRequest extends FormRequest
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
            'title' => ['required'],
            'description' => ['nullable'],
            'type' => ['required'],
            'status' => ['required'],
            'is_featured' => ['required'],
            'image' => ['nullable','mimes:png,jpg,jpeg'],
        ];
    }
}
