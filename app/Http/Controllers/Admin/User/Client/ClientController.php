<?php

namespace App\Http\Controllers\Admin\User\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Admin\Contracts as Contracts;

class ClientController extends Controller
{
    public function datatable()
    {
        return app(Contracts\GetDataTableClients::class)->execute();
    }

    public function checkAccess()
    {
    }

    public function block(User $client)
    {
        app(Contracts\BlockClient::class)->execute($client);
    }

    public function unblock(User $client)
    {
        app(Contracts\UnBlockClient::class)->execute($client);

    }
}
