<?php

use App\Http\Controllers\Admin\User\Account\LogoutController;
use Illuminate\Support\Facades\Route;
//Route::group(['prefix' => 'admin', 'middleware' => 'localization'], function () {
Route::prefix('admin')->group(function (){
    Route::middleware('guest')->group(function () {
        include('guest/auth.php');
    });

//    Route::group(['prefix' => 'user', 'middleware' => ['auth:sanctum','role:developer|super_admin|manager|courier']], function () {
    Route::prefix( 'user')->group(function () {
//        include('user/account.php');
//        include('user/dashboard.php');
        include('user/cities.php');
//        include('user/genres.php');
//        include('user/categories.php');
//        include('user/games.php');
//        include('user/products.php');
//        include('user/sets.php');
//        include('user/banners.php');
//        include('user/orders.php');
//        include('user/managers.php');
//        include('user/couriers.php');
//        include('user/settings.php');
//        include('user/deliveries.php');
//        include('user/clients.php');
//        include('user/help-sections.php');
//        include('user/promocodes.php');

        Route::post('logout', [LogoutController::class, 'logout']);
    });
});
