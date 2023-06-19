<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface ProductRepositoryInterface extends EloquentRepositoryInterface
{
    public function getAllGamesByGenre(
        string $genre_id,
        array  $columns = ['*'],
        array  $relations = [],
        array  $relations_count = []
    ): Collection;
}
