<?php

namespace App\Services\Client\Actions\Game;

use App\Models\Genre;
use App\Services\Client\Contracts\GetGamesByGenre;
use App\Tasks\Game\GetByGenreTask;
use Illuminate\Database\Eloquent\Collection;

class GetByGenreAction implements GetGamesByGenre
{
    public function execute(Genre $genre): Collection
    {
        return app(GetByGenreTask::class)->run(
            $genre->id,
            ['products.id','products.name'],
        );
    }

}
