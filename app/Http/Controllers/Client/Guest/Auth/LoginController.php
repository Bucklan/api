<?php

namespace App\Http\Controllers\Client\Guest\Auth;

use App\Services\Client\Contracts\Login;
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
}
