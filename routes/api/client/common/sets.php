<?phpuse Illuminate\Support\Facades\Route;use App\Http\Controllers\Client\Common\Product\SetController;Route::prefix('sets')->group(function () {    Route::get('', [SetController::class, 'index']);});