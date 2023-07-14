<?php

namespace App\Repositories;

use App\Models\User;

interface UserRepInterface extends EloquentRepositoryInterface
{
    public function checkExistingFromOnlyTrashedByPhone(string $phone): bool;

    public function checkExistingByPhone(string $phone): bool;

    public function findByPhone(
        string $phone
    ): ?User;

    public function findByEmail(
        string $email,
        array $columns = ['*'],
        array $relations = [],
        array $relations_count = []
    ): ?User;

    public function getQueryByRoles(array $roles,
                                    array $columns = ['*'],
                                    array $relations = [],
                                    array $relation_count = []);
}
