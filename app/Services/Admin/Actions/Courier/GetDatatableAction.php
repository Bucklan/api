<?php

namespace App\Services\Admin\Actions\Courier;

use App\Enums\User\Role;
use App\Services\Admin\Contracts\GetDatatableCouriers;
use App\Services\Admin\Datatables\Courier\Index;
use App\Tasks\Manager\GetQueryByRolesTask;

class GetDatatableAction implements GetDatatableCouriers
{
    public function execute()
    {
        $query = app(GetQueryByRolesTask::class)->run(
            [Role::COURIER],
            ['id', 'name', 'email', 'login_blocked_at', 'created_at'],
            ['files:id,url,fileable_id,fileable_type','permissions']
        );

        return (new Index($query,'datatables.couriers.'))->apply();
    }
}
