<?php

namespace App\Services\Client\Contracts;


use App\Models\Genre;
use Illuminate\Database\Eloquent\Collection;

interface GetGamesByGenre
{
public function execute(Genre $genre): Collection;
}
