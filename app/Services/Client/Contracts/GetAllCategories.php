<?php

namespace App\Services\Client\Contracts;



use Illuminate\Database\Eloquent\Collection;


interface GetAllCategories
{
public function execute(string $city_id): Collection;
}
