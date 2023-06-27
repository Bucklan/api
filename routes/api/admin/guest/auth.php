<?php

use App\Http\Controllers\Admin\Guest\Auth as Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::prefix('login')->group(function () {
        Route::post('', [Auth\LoginController::class, 'login']);
    });
});
