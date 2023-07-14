<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\User\Manager as Manager;

Route::group(['prefix' => 'managers', 'middleware' => 'permission:managers'], function () {
    Route::get('datatable', [Manager\ManagerController::class, 'datatable']);
    Route::post('check-access', [Manager\ManagerController::class, 'checkAccess']);
    Route::get('create', [Manager\ManagerController::class, 'create']);
    Route::post('', [Manager\ManagerController::class, 'store']);

    Route::group(['prefix' => '{manager}'], function () {
        Route::get('edit', [Manager\ManagerController::class, 'edit']);
        Route::post('', [Manager\ManagerController::class, 'update']);
        Route::post('block', [Manager\ManagerController::class, 'block']);
        Route::post('unblock', [Manager\ManagerController::class, 'unblock']);
    });
});
