<?php

namespace App\Services\Admin\Datatables\City;

use App\Models\City;
use App\Models\Manager;
use App\Models\User;
use App\Services\Admin\Datatables\DatatableContract;
use App\Services\Admin\Datatables\Datatable;
use App\Enums as Enums;
use Exception;
use Gate;
use Illuminate\Support\Facades\Auth;

class Index extends Datatable implements DatatableContract
{

    public function apply(): mixed
{
    return datatables()->of($this->query)
        ->addColumn('name',function (City $city){
          return $city->name;
        })  ->addColumn('created_at_datetime', function (City $city) {
            return $city->getCreatedAtDatetime();
        })
        ->addColumn('permissions', function (City $city) {
            return [
                'can_delete' => Gate::inspect('delete', $city)->allowed(),
            ];
        })
        ->filter(function ($query) {
            $query->filterBy(request()->all());
        })
        ->make();
}
}
