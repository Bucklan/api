<?php

namespace App\Services\Client\Providers;

use App\Services\Client as ClientService;
use Illuminate\Support\ServiceProvider;

class ActionServiceProvider extends ServiceProvider
{
    public array $singletons = [
        ClientService\Contracts\Register::class => ClientService\Actions\Register\RegisterAction::class,
        ClientService\Contracts\GetCitiesList::class => ClientService\Actions\City\GetListAction::class,
        ClientService\Contracts\GetAllCategories::class => ClientService\Actions\Category\GetCategoryAction::class,
        ClientService\Contracts\GetAllGenres::class => ClientService\Actions\Genre\GetGenreAction::class,
        ClientService\Contracts\GetGamesByGenre::class => ClientService\Actions\Game\GetByGenreAction::class,
        ClientService\Contracts\GetAllBanners::class => ClientService\Actions\Banner\GetAllAction::class,
    ];
}
