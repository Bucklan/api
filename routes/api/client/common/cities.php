<?php
use App\Http\Controllers\Client\User\City as City;
use Illuminate\Support\Facades\Route;


Route::prefix('cities')->group(function () {
    Route::get('', [City\CityController::class, 'index']);
});
