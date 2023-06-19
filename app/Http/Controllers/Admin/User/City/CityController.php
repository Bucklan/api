<?php

namespace App\Http\Controllers\Admin\User\City;

use App\Http\Controllers\Controller;
use http\Env\Request;
use Illuminate\Http\JsonResponse;
use App\Services\Admin\Contracts as Contracts;

class CityController extends Controller
{
    public function getCitiesList(): JsonResponse
    {
        $response = app(Contracts\GetCitiesList::class)->execute();
        return response()->json($response);
    }

    public function getUserCity(): JsonResponse
    {
        $response = app(Contracts\GetUserCity::class)->execute();
        return response()->json($response);
    }

    public function datatable(): mixed
    {
        return app(Contracts\GetDatatableOfCities::class)->execute();
    }
}
