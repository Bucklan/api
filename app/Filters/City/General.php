<?php

namespace App\Filters\City;

use App\Filters\FilterContract;
use App\Filters\QueryFilter;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class General extends QueryFilter implements FilterContract
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function handle($value): void
    {
        $this->query->where(function ($query) use ($value) {
            $query->whereLike("name", $value);
        });
    }
}
