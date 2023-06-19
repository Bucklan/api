<?php

namespace App\Http\Controllers\Client\User\City;

use App\Http\Controllers\Controller;
use App\Services\Client\Contracts as Contracts;
use Illuminate\Http\JsonResponse;

class CityController extends Controller
{
    public function index(): JsonResponse
    {
        $response = app(Contracts\GetCitiesList::class)->execute();
        return response()->json($response);
    }
}
