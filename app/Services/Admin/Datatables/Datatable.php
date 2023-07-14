<?php

namespace App\Services\Admin\Datatables;

abstract class Datatable
{
    protected $query;
    protected string $url;

    public function __construct($query, string $url)
    {
        $this->query = $query;
        $this->url = $url;
    }
}
