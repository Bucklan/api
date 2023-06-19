<?php

namespace App\Services\Admin\Actions\City;

use App\Services\Admin\Contracts\GetCitiesList;
use App\Tasks as Tasks;

class GetListAction implements GetCitiesList
{

    public function execute(): array
    {
        return app(Tasks\City\GetListTask::class)->run('name', 'id');
    }
}
