<?php

namespace App\Tasks\Client;

use App\Repositories\UserRepInterface;

class GetAllQueryTask
{
    public function __construct(private readonly UserRepInterface $repository)
    {
    }

    public function run(array $columns = ['*'],
                        array $relations = [],
                        array $relation_count = [])
    {
        return $this->repository->getAllQuery($columns, $relations, $relation_count);
    }
}
