<?php

namespace App\Services\Admin\Datatables\Manager;

use App\Models\User;
use App\Services\Admin\Datatables\DatatableContract;
use App\Services\Admin\Datatables\Datatable;
use App\Models\Manager;
use App\Enums as Enums;
use Exception;

class Index extends Datatable implements DatatableContract
{
    /**
     * @throws Exception
     */
    public function apply(): mixed
    {

        return datatables()->of($this->query)
            ->addColumn('info', function (User $manager) {
                return [
                    'avatar' => $manager->getAvatar(),
                    'name' => $manager->name
                ];
            })
            ->addColumn('email', function (User $manager) {
                return $manager->email;
            })
            ->addColumn('selected_permissions', function (User $manager) {
                $permissions = [];

                foreach ($manager->permissions as $permission) {
                    $permissions[] = [
                        'name' => $permission->name,
                        'description' => Enums\User\Permission::getDescription($permission->name)
                    ];
                }

                return $permissions;
            })
            ->addColumn('created_at_datetime', function (User $manager) {
                return $manager->getCreatedAtDatetime();
            })
            ->addColumn('permissions', function (User $manager){
                return [
                    'can_update' => $manager->hasRole(Enums\User\Role::MANAGER),
                    'can_block' => !$manager->isLoginBlocked(),
                ];
            })
            ->filter(function ($query) {
                $query->filterBy(request()->all());
            })
            ->make(true);
    }
}
