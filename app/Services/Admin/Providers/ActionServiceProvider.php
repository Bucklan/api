<?php

namespace App\Services\Admin\Providers;


use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\Facades\App;
use App\Services\Admin as Admin;

class ActionServiceProvider extends ServiceProvider
{
    public array $singletons = [
        Admin\Contracts\Logout::class               => Admin\Actions\LogoutAction::class,
        Admin\Contracts\Login::class                => Admin\Actions\Login\LoginAction::class,
        Admin\Contracts\GetCitiesList::class        => Admin\Actions\City\GetListAction::class,
        Admin\Contracts\GetUserCity::class          => Admin\Actions\City\GetUserCityAction::class,
        Admin\Contracts\CreateCity::class           => Admin\Actions\City\CreateAction::class,
        Admin\Contracts\GetDatatableOfCities::class => Admin\Actions\City\GetDatatableAction::class,
        Admin\Contracts\GetListUsers::class         => Admin\Actions\Dashboard\GetListUsersAction::class,
        Admin\Contracts\GetDataTableClients::class  => Admin\Actions\Client\GetDataTable::class,
        Admin\Contracts\UpdateCity::class           => Admin\Actions\City\UpdateAction::class,
        Admin\Contracts\DeleteCity::class           => Admin\Actions\City\DeleteAction::class,
        Admin\Contracts\BlockClient::class          => Admin\Actions\Client\BlockAction::class,
        Admin\Contracts\UnBlockClient::class        => Admin\Actions\Client\UnBlockAction::class,
        Admin\Contracts\GetDataTableManagers::class => Admin\Actions\Manager\GetDataTableAction::class,

    ];
}
