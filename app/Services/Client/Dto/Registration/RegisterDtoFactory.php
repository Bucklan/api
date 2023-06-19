<?php

namespace App\Services\Client\Dto\Registration;

use App\Services\Client\Requests\Registration as Register;

class RegisterDtoFactory
{
    public static function FromRequest(Register\RegisterRequest $request): RegisterDto
    {
        return self::fromArray($request->validated());
    }

    public static function fromArray(array $data): RegisterDto
    {
        return new RegisterDto([
            'name' => $data['name'],
            'phone' => $data['phone'] ?? null,
            'surname' => $data['surname'],
            'email' => $data['email'] ?? null,
            'password' => $data['password'] ?? null,
            'gender' => $data['gender'],
            'data_birth' => $data['data_birth'],
            'city_id' => $data['city_id'] ?? null,
        ]);
    }
}
