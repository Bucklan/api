<?phpuse Illuminate\Support\Facades\Route;use App\Http\Controllers\Client\User\Order\OrderController;Route::prefix('products')->group(function () {    Route::prefix('{product}')->group(function () {        Route::get('', [OrderController::class, 'showProduct']);    });});