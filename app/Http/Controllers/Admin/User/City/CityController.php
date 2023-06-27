<?php

namespace App\Http\Controllers\Admin\User\City;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Services\Admin\Requests\City\StoreRequest;
use App\Services\Admin\Requests\City\UpdateRequest;
use App\Services\Admin\Resource\City\EditResource;
use http\Env\Request;
use Illuminate\Http\JsonResponse;
use App\Services\Admin\Contracts as Contracts;

class CityController extends Controller
{
    public function checkAccess()
    {
    }

    public function getUserCity(): JsonResponse
    {
        $response = app(Contracts\GetUserCity::class)->execute();
        return response()->json($response);
    }

    public function getCitiesList(): JsonResponse
    {
        $response = app(Contracts\GetCitiesList::class)->execute();
        return response()->json($response);
    }

    public function datatable(): mixed
    {
        return app(Contracts\GetDatatableOfCities::class)->execute();
    }

    public function store(StoreRequest $request): void
    {

        app(Contracts\CreateCity::class)
            ->execute($request->get('name'));
    }

    public function edit(City $city): EditResource
    {
        return new EditResource($city);
    }

    public function update(City $city, UpdateRequest $request)
    {

        app(Contracts\UpdateCity::class)
            ->execute($city, $request->get('name'));
    }
    public function destroy(City $city): void
    {
//        $this->authorize('delete', $city);

        app(Contracts\DeleteCity::class)->execute($city);
    }
}
