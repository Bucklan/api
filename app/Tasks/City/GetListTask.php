<?php

namespace App\Tasks\City;

use App\Repositories\CityRepositoryInterface;

class GetListTask
{
    public function __construct(private readonly CityRepositoryInterface $repository){}

    public function run(string $value, string $key = null): array
    {
        return $this->repository->getList($value, $key);
    }
}
