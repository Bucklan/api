<?php

namespace App\Services\Client\Requests\Login;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->guest();
    }

    public function rules(): array
    {
        return [
            'phone' => ['required', 'phone', 'exists:users,phone'],
            'device_token' => ['nullable', 'string', 'max:1000'],
        ];
    }
}
