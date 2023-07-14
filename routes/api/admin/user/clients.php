<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\User\Client as Client;

Route::prefix('clients')->group(function () {
    Route::get('datatable', [Client\ClientController::class, 'datatable']);
    Route::post('check-access', [Client\ClientController::class, 'checkAccess']);
Route::prefix('{client}')->group(function (){
    Route::post('block',[Client\ClientController::class,'block']);
    Route::post('unblock',[Client\ClientController::class,'unblock']);
});
});
