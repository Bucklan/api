<?php

namespace App\Services\Admin\Actions\Client;

use App\Services\Admin\Contracts\GetDataTableClients;
use App\Services\Admin\Datatables\Client\Index;
use App\Tasks\Client\GetAllQueryTask;

class GetDataTable implements GetDataTableClients
{
    public function execute(): mixed
    {
        $query = app(GetAllQueryTask::class)
            ->run(
                ['id', 'name', 'surname', 'phone', 'login_blocked_at', 'created_at'],
//                ['client:id,promo_code,bonus_amount'],
            );

        return (new Index($query, 'datatables.clients.'))->apply();
    }

}
