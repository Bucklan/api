<?php

namespace App\Services\Client\Actions\Login;

use App\Models\Client;
use App\Services\Client\Contracts\Login;
use App\Services\Client\Jobs\SendSMSJob;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class LoginAction implements Login
{
    public function execute(string $phone): array
    {
    }

}
