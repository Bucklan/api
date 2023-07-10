<?php

namespace App\Repositories\Eloquent;

use App\Models\Order;
use App\Repositories\OrderRepositoryInterface;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{

    public function __construct(Order $model)
    {
        $this->model = $model;
    }

    public function GetAllOrderByClient(string $client_id,
                                        array  $columns = ['*'],
                                        array  $relations = [],
                                        array  $relation_count = [])
    {
       return  $this->model->query()
            ->select($columns)
            ->where('client_id',$client_id)
            ->with($relations)
            ->withCount($relation_count)
            ->get();
    }
}
