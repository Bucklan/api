<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\Common\Genre\GenreController;

Route::prefix('genres')->group(function () {
    Route::get('', [GenreController::class, 'index']);
    Route::prefix('{genre}')->group(function () {
        Route::get('games', [GenreController::class, 'GetGamesByGenre']);
    });
});
