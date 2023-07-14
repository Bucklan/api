<?php

namespace App\Policies;

use App\Models\City;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class CityPolicy
{
    use HandlesAuthorization;

    public function delete(User $user,City $city)
    {
        /*if ($city->promocodes_count || $city->banners_count || $city->carts_count || $city->categories_count || $city->client_addresses_count || $city->contacts_count || $city->couriers_count || $city->managers_count || $city->orders_count) {
            return $this->deny();
        }*/

        return $this->allow();
    }
}
