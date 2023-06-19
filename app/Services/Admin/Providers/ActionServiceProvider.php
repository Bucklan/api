<?php

namespace App\Services\Admin\Providers;


use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\Facades\App;
use App\Services\Admin as Admin;

class ActionServiceProvider extends ServiceProvider
{
    public array $singletons = [
        Admin\Contracts\Logout::class => Admin\Actions\LogoutAction::class,
        Admin\Contracts\GetCitiesList::class => Admin\Actions\City\GetListAction::class,
        Admin\Contracts\GetUserCity::class => Admin\Actions\City\GetUserCityAction::class,
        Admin\Contracts\Login::class => Admin\Actions\Login\LoginAction::class,
        Admin\Contracts\GetDatatableOfCities::class => Admin\Actions\City\GetDatatableAction::class,
    ];
}
