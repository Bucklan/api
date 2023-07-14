<?php

namespace App\Services\Admin\Datatables;

use Exception;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

interface DatatableContract
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     * @throws Exception
     */
    public function apply(): mixed;
}
