<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

interface CategoryRepositoryInterface extends EloquentRepositoryInterface
{
    public function getAllByCityQuery(
        string $city_id,
        array $columns = ['*'],
        array $relations = [],
        array $relations_count = []
    ): Builder;

    public function getAllByCity(
        string $city_id,
        array $columns = ['*'],
        array $relations = [],
        array $relations_count = []
    ): Collection;

    public function getListByCity(
        string  $city_id,
        string  $value,
        ?string $key,
    ): array;
}
