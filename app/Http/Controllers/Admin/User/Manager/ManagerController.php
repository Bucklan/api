<?php

namespace App\Http\Controllers\Admin\User\Manager;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Admin\Contracts as Contracts;

class ManagerController extends Controller
{
    public function datatable()
    {
        return app(Contracts\GetDataTableManagers::class)->execute();
    }

    public function checkAccess()
    {
    }

    public function create()
    {
        return app(Contracts\GetCitiesList::class)->execute();
    }


    public function block(User $client)
    {
    }

    public function unblock(User $client)
    {

    }
}
