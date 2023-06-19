<?php

namespace App\Services\Client\Actions\Genre;

use App\Services\Client\Contracts\GetAllGenres;
use App\Tasks\Genre\GetAllTask;
use Illuminate\Database\Eloquent\Collection;


class GetGenreAction implements GetAllGenres
{
    public function execute(): Collection
    {
        return app(GetAllTask::class)->run(
            ['id', 'name']
        );
    }
}
