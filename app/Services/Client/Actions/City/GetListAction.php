<?php

namespace App\Services\Client\Actions\City;

use App\Services\Client\Contracts\GetCitiesList;
use App\Tasks as Tasks;

class GetListAction implements GetCitiesList
{
    public function execute(): array
    {
        return app(Tasks\City\GetListTask::class)->run('name', 'id');
    }
}
