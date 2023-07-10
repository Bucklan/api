<?php

namespace App\Tasks\Order;

use App\Repositories\OrderRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class GetClientOrderTask
{
    public function __construct(private readonly OrderRepositoryInterface $repository)
    {
    }

    public function run(string $client_id,
                        array  $columns = ['*'],
                        array  $relations = [],
                        array  $relation_count = []
    ): Collection
    {
        return $this->repository->GetAllOrderByClient($client_id, $columns, $relations, $relation_count);
    }
}
