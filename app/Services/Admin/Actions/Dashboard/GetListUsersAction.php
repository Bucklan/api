<?php

namespace App\Services\Admin\Actions\Dashboard;

use App\Models\Client;
use App\Models\Courier;
use App\Models\Manager;
use App\Services\Admin\Contracts\GetListUsers;

class GetListUsersAction implements GetListUsers
{
public function execute()
{
    return [
        'count_clients' => count(Client::all()),
        'count_managers' => count(Manager::all()),
        'count_couriers' => count(Courier::all()),
    ];
}
}
