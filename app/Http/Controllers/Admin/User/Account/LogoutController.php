<?php

namespace App\Http\Controllers\Admin\User\Account;

use App\Services\Admin\Contracts as Contracts;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function logout(): void
    {
        app(Contracts\Logout::class)->execute();
    }
}
