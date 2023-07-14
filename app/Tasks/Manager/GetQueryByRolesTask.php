<?php

namespace App\Tasks\Manager;

use App\Repositories\ManagerRepositoryInterface;
use App\Repositories\UserRepInterface;

class GetQueryByRolesTask
{
public function __construct(private readonly UserRepInterface $repository)
{
}
public function run(array $roles,
array $columns = ['*'],
array $relations = [],
array $relation_count = []){
    return $this->repository->getQueryByRoles($roles,$columns,$relations,$relation_count);
}
}
