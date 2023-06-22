<?php

namespace App\Services\Client\Providers;

use App\Services\Client as ClientService;
use Illuminate\Support\ServiceProvider;

class ActionServiceProvider extends ServiceProvider
{
    public array $singletons = [
        ClientService\Contracts\Register::class            => ClientService\Actions\Register\RegisterAction::class,
        ClientService\Contracts\GetCitiesList::class       => ClientService\Actions\City\GetListAction::class,
        ClientService\Contracts\GetAllCategories::class    => ClientService\Actions\Category\GetCategoryAction::class,
        ClientService\Contracts\GetAllGenres::class        => ClientService\Actions\Genre\GetGenreAction::class,
        ClientService\Contracts\GetGamesByGenre::class     => ClientService\Actions\Game\GetByGenreAction::class,
        ClientService\Contracts\GetAllBanners::class       => ClientService\Actions\Banner\GetAllAction::class,
        ClientService\Contracts\GetPromocodeValue::class   => ClientService\Actions\Promocode\GetPromocodeAction::class,
        ClientService\Contracts\GetAllSets::class          => ClientService\Actions\Set\GetAllAction::class,
        ClientService\Contracts\GetMakeOrder::class        => ClientService\Actions\Order\GetMakeAction::class,
        ClientService\Contracts\VerifyRegisterCode::class  => ClientService\Actions\Register\VerifyCodeAction::class,
        ClientService\Contracts\Login::class               => ClientService\Actions\Login\LoginAction::class,
        ClientService\Contracts\VerifyLoginCode::class     => ClientService\Actions\Login\VerifyCodeAction::class,
        ClientService\Contracts\Logout::class              => ClientService\Actions\Logout\LogoutAction::class,
        ClientService\Contracts\GetAllAddress::class       => ClientService\Actions\ClientAddress\GetAllAction::class,
        ClientService\Contracts\CreateAddress::class       => ClientService\Actions\ClientAddress\CreateAction::class,
        ClientService\Contracts\UpdateAddress::class       => ClientService\Actions\ClientAddress\UpdateAction::class,
        ClientService\Contracts\DestroyAddress::class       => ClientService\Actions\ClientAddress\DestroyAction::class,
        ClientService\Contracts\GetAllHelpSections::class       => ClientService\Actions\HelpSection\GetAllAction::class,
    ];
}
