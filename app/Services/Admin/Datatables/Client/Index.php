<?php

namespace App\Services\Admin\Datatables\Client;

use App\Models\Manager;
use App\Models\User;
use App\Services\Admin\Datatables\DatatableContract;
use App\Services\Admin\Datatables\Datatable;
use App\Models\Client;
use App\Enums as Enums;
use Auth;
use Exception;

class Index extends Datatable implements DatatableContract
{
    /**
     * @throws Exception
     */
    public function apply(): mixed
    {
        /** @var User|Manager $user */
        $user = Auth::user();

        return datatables()->of($this->query)
            ->addColumn('info', function (User $client) {
                return [
                    'name' => $client->name,
                    'surname' => $client->surname,
                    'patronymic' => $client->patronymic,
                ];
            })
            ->addColumn('phone', function (User $client) {
                return $client->phone;
            })
            ->addColumn('created_at_datetime', function (User $client) {
                return $client->getCreatedAtDatetime();
            })
            ->addColumn('permissions', function (User $client) use ($user) {
                return [
                    'can_update' => $user->hasAnyRole(Enums\User\Role::MANAGER, Enums\User\Role::SUPER_ADMIN, Enums\User\Role::DEVELOPER),
                    'can_block' => !$client->isLoginBlocked(),
                ];
            })
            ->filter(function ($query) {
                $query->filterBy(request()->all());
            })
            ->make(true);
    }
}
