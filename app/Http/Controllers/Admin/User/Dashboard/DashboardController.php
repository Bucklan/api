<?php

namespace App\Http\Controllers\Admin\User\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\Admin\Contracts\GetListUsers;

class DashboardController extends Controller
{
    public function index()
    {
        $response = app(GetListUsers::class)->execute();
        return response()->json($response);
    }
}
