<?php

namespace App\Services\Admin\Actions\City;

use App\Models\Manager;
use App\Models\User;
use App\Services\Admin\Contracts\GetUserCity;
use Illuminate\Support\Facades\Auth;

class GetUserCityAction implements GetUserCity
{
    public function execute(): ?string
    {
        /** @var User|Manager $user */
        $user = User::first();
//        $user = User::user();

        return $user->city_id;
    }
}
