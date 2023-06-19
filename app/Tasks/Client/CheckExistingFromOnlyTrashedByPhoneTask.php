<?php

namespace App\Tasks\Client;

use App\Repositories\Eloquent\UserRepository;
use App\Repositories\UserRepInterface;

class CheckExistingFromOnlyTrashedByPhoneTask
{
    public function __construct(private readonly  UserRepository $repository){}

    public function run(string $phone): bool
    {
        return $this->repository->checkExistingFromOnlyTrashedByPhone($phone);
    }
}
