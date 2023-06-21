<?php

namespace App\Services\Client\Requests\Registration;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'phone' => 'string|phone',
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'password' => 'nullable|max:255|confirmed',
            'email' => 'nullable|max:255|email|unique',
            'gender' => 'nullable|numeric|',
            'data_birth' => 'nullable|numeric',
            'city_id' => 'nullable|numeric',
        ];
    }
}
