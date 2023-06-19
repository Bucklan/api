<?php

namespace App\Providers;

use App\Repositories as Repositories;
use Carbon\Laravel\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public array $bindings = [
        Repositories\UserRepInterface::class => Repositories\Eloquent\UserRepository::class,
        Repositories\CityRepositoryInterface::class => Repositories\Eloquent\CityRepository::class,
        Repositories\CategoryRepositoryInterface::class => Repositories\Eloquent\CategoryRepository::class,
        Repositories\GenreRepositoryInterface::class => Repositories\Eloquent\GenreRepository::class,
        Repositories\ProductRepositoryInterface::class => Repositories\Eloquent\ProductRepository::class,
    ];
}
