<?php

namespace App\Services\Client\Dto\Registration;

use App\Services\Client\Requests\Registration\VerifyCodeRequest;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class VerifyCodeDtoFactory
{
    /**
     * @throws UnknownProperties
     */
    public static function fromRequest(VerifyCodeRequest $request): VerifyCodeDto
    {
        return self::fromArray($request->validated());
    }

    /**
     * @throws UnknownProperties
     */
    public static function fromArray(array $data): VerifyCodeDto
    {
        return new VerifyCodeDto([
            'phone' => $data['phone'],
            'verification_code' => $data['verification_code'],
            'device_token' => $data['device_token'] ?? null,
        ]);
    }
}
