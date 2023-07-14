<?php

namespace App\Repositories;

interface ManagerRepositoryInterface extends EloquentRepositoryInterface
{
    public function getQueryByRoles(array $roles,
                                    array $columns = ['*'],
                                    array $relations = [],
                                    array $relation_count = []);
}
