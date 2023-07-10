<?php

namespace App\Services\Admin\Actions;

use App\Models\User;
use App\Services\Admin\Contracts\Logout;
use Illuminate\Support\Facades\Auth;

class LogoutAction implements Logout
{
public function execute() :void
{
    /** @var User $user */
    $user = Auth::user();
    $user->tokens()->delete();
}
}
