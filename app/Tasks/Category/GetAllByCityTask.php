<?php

namespace App\Tasks\Category;

use App\Repositories\CategoryRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class  GetAllByCityTask
{
    public function __construct(private readonly CategoryRepositoryInterface $repository){}

    public function run(
        string $city_id,
        array $columns = ['*'],
        array $relations = [],
        array $relations_count = []
    ): Collection
    {
        return $this->repository->getAllByCity($city_id, $columns, $relations, $relations_count);
    }
}
