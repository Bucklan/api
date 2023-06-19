<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

/**
 * Class FilterBuilder
 * @package App
 *
 * @property $query
 * @property Request $filters
 * @property string $namespace
 */

class FilterBuilder
{
    protected Builder $query;
    protected array $filters;
    protected string $namespace;

    public function __construct(Builder $query, array $filters, string $namespace)
    {
        $this->query = $query;
        $this->filters = $filters;
        $this->namespace = $namespace;
    }

    public function apply(): Builder
    {
        foreach ($this->filters as $name => $value) {

            $normalizedName = ucfirst($name);
            $class = $this->namespace . "\\$normalizedName";

            if (!class_exists($class) || $value == null) {
                continue;
            }

            (new $class($this->query))->handle($value);

        }

        return $this->query;
    }
}
