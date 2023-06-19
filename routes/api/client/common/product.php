<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\Common\Product as Product;

Route::prefix('products')->group(function () {
    Route::prefix('{product}')->group(function () {
        Route::get('', [Product\ProductController::class, 'show']);
    });
});
