<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

/**
 * Class QueryFilter
 * @package App
 *
 * @property Builder $query
 */
abstract class QueryFilter
{
    protected Builder $query;

    public function __construct($query)
    {
        $this->query = $query;
    }
}
