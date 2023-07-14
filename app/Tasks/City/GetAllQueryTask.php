<?php

namespace App\Tasks\City;

use App\Repositories\CityRepositoryInterface;

class GetAllQueryTask
{
    public function __construct(private readonly CityRepositoryInterface $repository)
    {
    }

    public function run(array $columns = ['*'],
                        array $relations = [],
                        array $relation_count = [])
    {
    return $this->repository->getAllQuery($columns,$relations,$relation_count);

    }
}
