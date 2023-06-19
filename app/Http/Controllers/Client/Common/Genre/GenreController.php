<?php

namespace App\Http\Controllers\Client\Common\Genre;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Services\Client\Contracts\GetAllGenres;
use App\Services\Client\Contracts\GetGamesByGenre;
use App\Services\Client\Resources\Game\AllByGenreResource;
use App\Services\Client\Resources\Genre\AllResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GenreController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $response = app(GetAllGenres::class)->execute();

        return AllResource::collection($response);
    }

    public function GetGamesByGenre(Genre $genre): AnonymousResourceCollection
    {
        $response = app(GetGamesByGenre::class)
            ->execute($genre);

        return AllByGenreResource::collection($response);
    }
}
