<?php

namespace App\Services\Admin\Actions\Manager;

use App\Enums as Enums;
use App\Services\Admin\Contracts\GetDataTableManagers;
use App\Services\Admin\Datatables\Manager\Index;
use App\Tasks as Tasks;

class GetDataTableAction implements GetDataTableManagers
{
    public function execute()
    {
        $query = app(Tasks\Manager\GetQueryByRolesTask::class)->run(
            [Enums\User\Role::MANAGER],
            ['id', 'name', 'email', 'login_blocked_at', 'created_at'],
            ['file:id,url,fileable_id,fileable_type', 'permissions']
        );
        return (new Index($query, 'datatables.managers.'))->apply();

    }
}
