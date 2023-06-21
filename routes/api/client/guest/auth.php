<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Client\Guest\Auth;

Route::prefix('auth')->group(function () {

    Route::prefix('register')->group(function () {
        Route::post('', [Auth\RegisterController::class, 'register']);
        Route::post('verify-code', [Auth\RegisterController::class, 'verifyCode']);

    });
    Route::prefix('login')->group(function () {
        Route::post('', [Auth\LoginController::class, 'login']);
        Route::post('verify-code', [Auth\LoginController::class, 'verifyCode']);
    });
});
