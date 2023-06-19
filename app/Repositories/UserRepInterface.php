<?php

namespace App\Repositories;

interface UserRepInterface extends EloquentRepositoryInterface
{
    public function checkExistingFromOnlyTrashedByPhone(string $phone): bool;

    public function checkExistingByPhone(string $phone): bool;

//        public function findByPhone(
//            string $phone
//        ): ?User;
}
