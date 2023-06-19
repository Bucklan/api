<?php

namespace App\Http\Controllers\Client\Common\Category;

use App\Http\Controllers\Controller;
use App\Services\Client\Resources as Resources;
use App\Services\Client\Contracts as Contracts;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CategoryController extends Controller
{
    public function index(Request $request): AnonymousResourceCollection
    {
        $response = app(Contracts\GetAllCategories::class)->execute(
            $request->header('City')
        );

//        dd($response);
        return Resources\Category\AllResource::collection($response);
    }
}
