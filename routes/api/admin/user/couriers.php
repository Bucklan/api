<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\User\Courier\CourierController;

Route::prefix('couriers')->middleware('permission:couriers')->group(function () {
    Route::get('datatable', [CourierController::class, 'datatable']);
    Route::get('check-access', [CourierController::class, 'checkAccess']);
//    Route::get('create', [CourierController::class, 'create']);
//    Route::post('',[CourierController::class,'store']);

    Route::prefix('{courier}')->group(function () {
//        Route::get('edit', [CourierController::class, 'edit']);
//        Route::post('', [CourierController::class, 'update']);
//        Route::post('block',[CourierController::class,'block']);
//        Route::post('unblock',[CourierController::class,'unblock']);
    });
});
