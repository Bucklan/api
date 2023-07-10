<?php

namespace App\Repositories;

interface OrderRepositoryInterface extends EloquentRepositoryInterface
{
    public function GetAllOrderByClient(string $client_id,
                                        array  $columns = ['*'],
                                        array  $relations = [],
                                        array  $relation_count = []);
}
