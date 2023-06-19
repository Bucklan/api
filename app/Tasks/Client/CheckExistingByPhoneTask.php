<?php

namespace App\Tasks\Client;


use App\Repositories\Eloquent\UserRepository;
use App\Repositories\UserRepInterface;

class CheckExistingByPhoneTask
{
    public function __construct(private readonly UserRepository $repository){}

    /**
     * @param string $phone
     * @return bool
     */
    public function run(string $phone): bool
    {
        return $this->repository->checkExistingByPhone($phone);
    }
}
