<?php

namespace App\Services\Admin\Datatables\Courier;

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
            ->addColumn('info', function (User $courier) {
                return [
                    'avatar' => $courier->getAvatar(),
                    'name' => $courier->name
                ];
            })
            ->addColumn('email', function (User $courier) {
                return $courier->email;
            })
            ->addColumn('selected_permissions', function (User $courier) {
                $array = [];

                foreach ($courier->permissions as $permission) {
                    $array[] = [
                        'name' => $permission->name,
                        'description' => Enums\User\Permission::getDescription($permission->name)
                    ];
                }

                return $array;
            })
            ->addColumn('created_at_datetime', function (User $courier) {
                return $courier->getCreatedAtDatetime();
            })
            ->addColumn('permissions', function (User $courier){
                return [
                    'can_update' => $courier->hasRole(Enums\User\Role::COURIER),
                    'can_block' => !$courier->isLoginBlocked(),
                ];
            })
            ->filter(function ($query) {
                $query->filterBy(request()->all());
            })
            ->make(true);
    }
}
