<?php

namespace App\Http\Controllers\Client\Guest\Auth;

use Illuminate\Http\JsonResponse;
use App\Services\Client\Requests as Requests;


class LoginController
{
    public function login(Requests\Login\LoginRequest $request): JsonResponse
    {
        $response = app(Contracts\Login::class)->execute(
            $request->get('phone')
        );

        return response()->json($response);
    }
}
