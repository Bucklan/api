<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\ManagerRepositoryInterface;

class ManagerRepository extends BaseRepository implements ManagerRepositoryInterface
{
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function getQueryByRoles(array $roles,
                                    array $columns = ['*'],
                                    array $relations = [],
                                    array $relation_count = [])
    {
        return $this->model
            ->query()
            ->role($roles)
            ->select($columns)
            ->with($relations)
            ->withCount($relation_count);
    }
}
