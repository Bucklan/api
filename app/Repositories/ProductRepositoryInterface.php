<?php

namespace App\Repositories;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

interface ProductRepositoryInterface extends EloquentRepositoryInterface
{

    public function getAllSetsByCity(
        string $city_id,
        array  $columns = ['*'],
        array  $relations = [],
        array  $relations_count = []
    ): Paginator;

    public function getAllGamesByGenre(
        string $genre_id,
        array  $columns = ['*'],
        array  $relations = [],
        array  $relations_count = []
    ): Collection;

}
