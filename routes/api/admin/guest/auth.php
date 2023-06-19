<?php

use App\Http\Controllers\Admin\Guest\Auth as Auth;

Route::group(['prefix' => 'auth'], function () {
    Route::group(['prefix' => 'login'], function () {
        Route::post('', [Auth\LoginController::class, 'login'])->middleware('throttle:api.login');
    });
});
