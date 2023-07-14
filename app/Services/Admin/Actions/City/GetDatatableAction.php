<?php

namespace App\Services\Admin\Actions\City;

use App\Services\Admin\Contracts\GetDatatableOfCities;
use App\Services\Admin\Datatables\City\Index;
use App\Tasks\City\GetAllQueryTask;
use Illuminate\Http\JsonResponse;

class GetDatatableAction implements GetDatatableOfCities
{
    public function execute(): JsonResponse
    {
        $query = app(GetAllQueryTask::class)
            ->run(
                ['id', 'name', 'created_at'],
            );
        return (new Index($query, 'datatables.cities.'))->apply();
    }
}
