<?php

namespace App\Http\Controllers\Client\Guest\Auth;

use App\Services\Client\Contracts\Login;
use App\Services\Client\Contracts\VerifyLoginCode;
use App\Services\Client\Dto\Login\VerifyCodeDtoFactory;
use App\Services\Client\Requests\Login\VerifyCodeRequest;
use Illuminate\Http\JsonResponse;
use App\Services\Client\Requests\Login\LoginRequest;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;


class LoginController
{

    /**
     * @throws UnknownProperties
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $response = app(Login::class)->execute(
            $request->get('phone')
        );
        return response()->json($response);
    }

    public function verifyCode(VerifyCodeRequest $request): JsonResponse
    {
        $response = app(VerifyLoginCode::class)
            ->execute(VerifyCodeDtoFactory::fromRequest($request));

        return response()->json($response);
    }
}
