<?php

use Illuminate\Support\Facades\Route;

Route::prefix('client')->group(function () {
//Route::group(['prefix' => 'client', 'middleware' => 'localization'], function () {

    include('common/cities.php');
//    include('common/help-sections.php');

//    Route::group(['middleware' => 'city_checker'], function () {
        include('common/banners.php');
        include('common/genres.php');
        include('common/categories.php');
        include('common/games.php');
//        include('common/sets.php');
        include('common/product.php');
//    });

    Route::group(['middleware' => 'guest'], function () {
        include('guest/auth.php');
    });

//    Route::group(['prefix' => 'user', 'middleware' => 'auth:sanctum'], function () {
//        include('user/carts.php');
//        include('user/addresses.php');
//        include('user/orders.php');
//        include('user/profile.php');
//        include('user/promocodes.php');
//
//        Route::post('logout', [LogoutController::class, 'logout']);
//    });

});
