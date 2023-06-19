<?php

namespace App\Services\Admin\Contracts;

use Illuminate\Http\JsonResponse;

interface GetDatatableOfCities
{
    public function execute(): JsonResponse;
}
