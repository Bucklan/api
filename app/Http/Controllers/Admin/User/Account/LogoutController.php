<?php

namespace App\Http\Controllers\Admin\User\Account;

use App\Http\Controllers\Controller;
use App\Services\Admin\Contracts\Logout;

class LogoutController extends Controller
{
    function logout()
    {
        app(Logout::class)->execute();
    }
}
