<?php

namespace App\Services\Client\Actions\Order;

use App\Services\Client\Contracts\GetAllOrders;
use App\Tasks\Order\GetClientOrderTask;
use Illuminate\Console\View\Components\Task;
use Illuminate\Support\Facades\Auth;

class GetAllAction implements GetAllOrders
{
    public function execute()
    {
        $client = Auth::user()->client;
        $result = app(GetClientOrderTask::class)->run(
            $client->id,
            ['*'],
            ['orderProducts']
        );

        return $result;
    }
}
