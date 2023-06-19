<?php

namespace App\Services\Client\Contracts;

use App\Services\Client\Dto\Registration\RegisterDto;
use Throwable;

interface Register
{
    /**
     * @throws Throwable
     */
    public function execute(RegisterDto $dto): array;
}
