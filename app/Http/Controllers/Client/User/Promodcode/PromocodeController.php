<?phpnamespace App\Http\Controllers\Client\User\Promodcode;use App\Http\Controllers\Controller;use App\Services\Client\Contracts\GetPromocodeValue;use App\Services\Client\Requests\Promocode\GetValueRequest;class PromocodeController extends Controller{    public function getValue(GetValueRequest $request)    {        return app(GetPromocodeValue::class)            ->execute($request->get('promocode'));//        dd($request);    }}