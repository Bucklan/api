<?php

namespace App\Services\Client\Actions\Login;


use App\Models\User;
use App\Services\Client\Contracts\Login;
use App\SubActions\Client\CreateOrUpdateVerificationSubAction;
use App\Tasks\Client\FindByPhoneTask;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class LoginAction implements Login
{
    public function execute(string $phone): array
    {
        /** @var User $client */
        $client = app(FindByPhoneTask::class)->run($phone);
        $this->ensureThatClientIsNotDeleted($client);
        $this->ensureThatClientPhoneHasVerified($client);
        $this->ensureThatClientIsNotBlocked($client);

        app(CreateOrUpdateVerificationSubAction::class)->run(
            $client, 'Авторизация'
        );


        return [
            'phone' => $client->phone
        ];
    }

    private function ensureThatClientIsNotDeleted(User $client): void
    {
        if ($client->isDeleted()) {
            throw new AccessDeniedHttpException(
                __('Ваша учетная запись удалена.')
            );
        }
    }

    private function ensureThatClientPhoneHasVerified(User $client): void
    {
        if (!$client->hasVerifiedPhone()) {
            throw new UnauthorizedHttpException(
                'Basic', __('Номер телефона не подтвержден.')
            );
        }
    }

    private function ensureThatClientIsNotBlocked(User $client): void
    {
        if ($client->isLoginBlocked()) {
            throw new AccessDeniedHttpException(
                __('Ваша учетная запись заблокирована.')
            );
        }
    }
}
