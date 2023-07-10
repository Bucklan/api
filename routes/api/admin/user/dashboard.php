<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\User\Dashboard\DashboardController;

Route::prefix('dashboard')->group(function () {
    Route::get('', [DashboardController::class, 'index']);
});
