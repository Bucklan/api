<?php

namespace App\Services\Admin\Requests\Login;

class LoginRequest
{
    public function boot(): bool
    {
        return auth()->guest();
    }

    public function rules(): array
    {
        return [
            'email' => 'required|string',
            'password' => 'required|string',
        ];
    }

    public function attributes(): array
    {
        return [
            'email' => sprintf('«%s»', __('Логин')),
            'password' => sprintf('«%s»', __('Пароль')),
        ];
    }
}
