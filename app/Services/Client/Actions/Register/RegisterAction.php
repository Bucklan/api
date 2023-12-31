<?php

namespace App\Services\Client\Actions\Register;

use App\Models\User;
use App\Services\Client\Contracts\Register;
use App\Services\Client\Dto\Registration\RegisterDto;
use App\SubActions\Client\CreateOrUpdateVerificationSubAction;
use App\Tasks\Client as Client;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;
use Throwable;
use Illuminate\Support\Facades\DB;

class RegisterAction implements Register
{
    /**
     * @throws Throwable
     */
    public function execute(RegisterDto $dto): array
    {
        if (isset($dto->phone)) {
            $this->ensureThatPhoneIsNotRegisteredAndDeleted($dto->phone);
            $this->ensureThatPhoneIsNotRegistered($dto->phone);
        }
        $data = DB::transaction(function () use ($dto) {
            $user = $this->createUser($dto);
            $verificationCode = $this->createVerification($user);
            return compact('user', 'verificationCode');
        });
        if (isset($dto->phone)) {
            return [
                'phone' => $data['user']->phone
            ];
        }
        else{
            return [
              'email' => $data['user']->email
            ];
        }
    }

    private function createUser(RegisterDto $dto): User
    {
        return User::create($dto->except()->toArray());

    }

    private function createVerification(User $client): string
    {
        return app(CreateOrUpdateVerificationSubAction::class)->run($client, 'Регистрация');
    }

    private function ensureThatPhoneIsNotRegisteredAndDeleted(string $phone): void
    {
        $exists = app(Client\CheckExistingFromOnlyTrashedByPhoneTask::class)->run($phone);

        if ($exists) {
            throw new UnprocessableEntityHttpException(
                'The account for this phone has already been registered and deleted.'
            );
        }
    }

    private function ensureThatPhoneIsNotRegistered(string $phone): void
    {
        $exists = app(Client\CheckExistingByPhoneTask::class)->run($phone);

        if ($exists) {
            throw new UnprocessableEntityHttpException(
                'The account for this phone is already registered.'
            );
        }
    }
//


}
