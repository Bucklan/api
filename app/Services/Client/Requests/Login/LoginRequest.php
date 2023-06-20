<?php

namespace App\Services\Client\Requests\Login;

use Illuminate\Support\Facades\Request;

class LoginRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'phone' => 'required|phone|numeric|max:20|exists:users,phone',
            'device_token' => 'nullable|string|max:1000',
        ];
    }
}
