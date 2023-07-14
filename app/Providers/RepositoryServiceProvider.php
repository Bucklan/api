<?php

namespace App\Providers;

use App\Repositories as Repositories;
use Carbon\Laravel\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public array $bindings = [
        Repositories\UserRepInterface::class                   =>   Repositories\Eloquent\UserRepository::class,
        Repositories\CityRepositoryInterface::class            =>   Repositories\Eloquent\CityRepository::class,
        Repositories\CategoryRepositoryInterface::class        =>   Repositories\Eloquent\CategoryRepository::class,
        Repositories\GenreRepositoryInterface::class           =>   Repositories\Eloquent\GenreRepository::class,
        Repositories\ProductRepositoryInterface::class         =>   Repositories\Eloquent\ProductRepository::class,
        Repositories\BannerRepositoryInterface::class          =>   Repositories\Eloquent\BannerRepository::class,
        Repositories\PromocodeRepositoryInterface::class       =>   Repositories\Eloquent\PromocodeRepository::class,
        Repositories\ClientAddressRepositoryInterface::class   =>   Repositories\Eloquent\ClientAddressRepository::class,
        Repositories\HelpSectionRepositoryInterface::class     =>   Repositories\Eloquent\HelpSectionRepository::class,
        Repositories\ClientInviteRepositoryInterface::class    =>   Repositories\Eloquent\ClientInviteRepository::class,
        Repositories\CartRepositoryInterface::class            =>   Repositories\Eloquent\CartRepository::class,
        Repositories\OrderRepositoryInterface::class           =>   Repositories\Eloquent\OrderRepository::class,
        Repositories\ClientRepositoryInterface::class           =>   Repositories\Eloquent\ClientRepository::class,
    ];
}
