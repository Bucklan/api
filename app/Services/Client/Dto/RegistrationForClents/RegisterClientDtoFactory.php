<?php

namespace App\Services\Client\Dto\RegistrationForClents;

use App\Services\Client\Requests\RegistrationForClents\RegisterClientRequest;

class RegisterClientDtoFactory
{
    public static function FromRequest(RegisterClientRequest $request): RegisterClientDto
    {
        return self::fromArray($request->validated());
    }

    public static function fromArray(array $data): RegisterClientDto
    {
     return new RegisterClientDto(
         [
            'user_id' => $data['user_id'],
             ''
         ]
     );
    }
}
