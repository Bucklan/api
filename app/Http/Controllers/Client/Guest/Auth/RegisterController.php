<?php

namespace App\Http\Controllers\Client\Guest\Auth;

use App\Services\Client\Contracts\Register as Register;
use App\Services\Client\Contracts\VerifyRegisterCode;
use App\Services\Client\Dto as Dto;

use App\Services\Client\Requests\Registration\RegisterRequest;

use App\Services\Client\Requests\Registration\VerifyCodeRequest;
use Illuminate\Http\JsonResponse;

class RegisterController
{
    public function register(RegisterRequest $request): JsonResponse
    {
        $response = app(Register::class)->execute(
            Dto\Registration\RegisterDtoFactory::fromRequest($request)
        );

        return response()->json($response);
    }
    public function verifyCode(VerifyCodeRequest $request): JsonResponse
    {
        $response = app(VerifyRegisterCode::class)->execute(
            Dto\Registration\VerifyCodeDtoFactory::fromRequest($request)
        );

        return response()->json($response);
    }

}
