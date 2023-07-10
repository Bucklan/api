<?php

namespace App\Services\Admin\Actions\Login;

use App\Enums\User\Role as Role;
use App\Models\Courier;
use App\Models\Manager;
use App\Models\User;
use App\Services\Admin\Contracts\Login;
use App\Tasks\User\FindByEmail;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Throwable;


class LoginAction implements Login
{
    /**
     * @throws ValidationException
     * @throws Throwable
     */
    public function execute(string $email, string $password): array
    {
        $user = app(FindByEmail::class)->run($email);
//        dd($user);
        if (!empty($user)) {
            $this->validateLogin($email, $password);
        }
        $this->ensureThatUserHasRoles($user);
        $this->ensureThatUserIsNotBlocked($user);
        DB::transaction(function () use ($user) {
            $user->tokens()->delete();
        });

        return [
            'token' => $user->createToken('auth_token')->plainTextToken,
            'permissions' => $user->getPermissionNames()->toArray()
        ];
    }

    /**
     * @throws ValidationException
     */
    private function validateLogin(string $email, string $password): void
    {

        if (!Auth::attempt(['email' => $email, 'password' => $password])) {
            throw ValidationException::withMessages([
                __('1These credentials do not match our records')
            ]);
        }
    }

    /**
     * @throws ValidationException
     */
    private function ensureThatUserHasRoles(User|Manager|Courier $user): void
    {
        if (!$user->hasAnyRole([Role::MANAGER, Role::DEVELOPER, Role::SUPER_ADMIN, Role::COURIER])) {
            throw ValidationException::withMessages([
                'email' => '2These credentials do not match our records',
            ]);
        }
    }

    /**
     * @throws ValidationException
     */
    private function ensureThatUserIsNotBlocked(User|Manager|Courier $user): void
    {
        if ($user->isLoginBlocked()) {
            throw ValidationException::withMessages([
                '3These credentials do not match our records'
            ]);
        }
    }

}
