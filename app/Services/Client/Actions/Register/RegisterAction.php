<?php

namespace App\Services\Client\Actions\Register;

use App\Enums\Gender\Type;
use App\Models\User;
use App\Services\Client\Contracts\Register;
use App\Services\Client\Dto\Registration\RegisterDto;
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
        $this->ensureThatPhoneIsNotRegisteredAndDeleted($dto->phone);
        $this->ensureThatPhoneIsNotRegistered($dto->phone);
        $data = DB::transaction(function () use ($dto) {
            $user = $this->createUser($dto);
            return compact('user');
        });
        return [
            'phone' => $data['user']->phone
        ];

    }

    private function createUser(RegisterDto $dto): User
    {
        return User::create($dto->except()->toArray());

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
