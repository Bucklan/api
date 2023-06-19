<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\Common\Category as Category;

Route::prefix('categories')->group(function () {
    Route::get('', [Category\CategoryController::class, 'index']);
});
