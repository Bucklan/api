<?php

use App\Http\Controllers\Client\User\Account\LogoutController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'client',/* 'middleware' => 'localization'*/], function () {

    include('common/cities.php');
    include('common/help-sections.php');

    Route::middleware('city_checker')->group(function () {
        include('common/banners.php');
        include('common/genres.php');
        include('common/categories.php');
        include('common/games.php');
        include('common/sets.php');
        include('common/product.php');
    });

    Route::middleware('guest')->group(function () {
        include('guest/auth.php');
    });

    Route::prefix('user')
        ->middleware('auth:sanctum')
        ->group(function () {
            include('user/carts.php');
            include('user/addresses.php');
            include('user/orders.php');
            include('user/profile.php');
            include('user/promocodes.php');

            Route::post('logout', [LogoutController::class, 'logout']);
        });

});
