<?php

namespace App\Http\Controllers\Admin\User\Client;

use App\Http\Controllers\Controller;
use App\Services\Admin\Contracts\GetDataTableClients;

class ClientController extends Controller
{
    public function datatable()
    {
        return app(GetDataTableClients::class)->execute();
    }

    public function checkAccess(){}
}
