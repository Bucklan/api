<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\UserRepInterface;

class UserRepository extends BaseRepository implements UserRepInterface
{
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function checkExistingByPhone(string $phone): bool
    {
        return $this->model
            ->query()
            ->where('phone', $phone)
            ->exists();
    }

    public function checkExistingFromOnlyTrashedByPhone(string $phone): bool
    {
        return $this->model
            ->query()
            ->onlyTrashed()
            ->where('phone', $phone)
            ->exists();
    }

//    public function findByPhone(
//        string $phone
//    ): ?User
//    {
//        return $this->model->query()->where('phone', $phone)
//            ->first();
//    }

}