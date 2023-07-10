<?php

namespace App\Http\Controllers\Admin\User\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class DashboardController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json();
    }
}
