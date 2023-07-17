<?php

namespace App\Http\Controllers\Admin\User\Courier;

use App\Http\Controllers\Controller;
use App\Services\Admin\Contracts\GetDatatableCouriers;

class CourierController extends Controller
{
    public function datatable()
    {
       return app(GetDatatableCouriers::class)->execute();
    }

    public function checkAccess()
    {

    }
}
