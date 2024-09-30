<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalStoreRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'middle_name' => ['nullable', 'string', 'max:50'],
            'first_phone' => ['nullable', 'string', 'max:15'],
            'second_phone' => ['nullable', 'string', 'max:15'],
            'email' => ['nullable', 'email'],
            'address' => ['nullable', 'string'],
            'date_of_birth' => ['nullable', 'date'],
            'nationality' => ['nullable', 'string', 'max:50'],
            'marital_status' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'github' => ['nullable', 'string'],
            'linked_in' => ['nullable', 'string'],
            'instagram' => ['nullable', 'string'],
            'facebook' => ['nullable', 'string'],
            'behance' => ['nullable', 'string'],
        ];
    }
}
