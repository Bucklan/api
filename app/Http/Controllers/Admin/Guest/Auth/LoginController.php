<?php

namespace App\Http\Controllers\Admin\Guest\Auth;

use App\Services\Admin\Requests as Requests;
use App\Services\Admin\Contracts as Contracts;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class LoginController extends Controller
{
    public function login(Requests\Login\LoginRequest $request): JsonResponse
    {
//        dd($request);
        $response = app(Contracts\Login::class)->execute(
            $request->get('email'), $request->get('password')
        );

        return response()->json($response);
    }
}
