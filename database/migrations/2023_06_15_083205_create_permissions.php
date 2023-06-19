<?php

use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\PermissionRegistrar;
use App\Models\Permission;
use App\Enums as Enums;

class CreatePermissions extends Migration
{
    public function up(): void
    {
        // RESET CACHED ROLES AND PERMISSIONS
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => Enums\User\Permission::DASHBOARD]);
        Permission::create(['name' => Enums\User\Permission::ORDERS]);
        Permission::create(['name' => Enums\User\Permission::CLIENTS]);
        Permission::create(['name' => Enums\User\Permission::MANAGERS]);
        Permission::create(['name' => Enums\User\Permission::COURIERS]);
        Permission::create(['name' => Enums\User\Permission::CATEGORIES]);
        Permission::create(['name' => Enums\User\Permission::GENRES]);
        Permission::create(['name' => Enums\User\Permission::PRODUCTS]);
        Permission::create(['name' => Enums\User\Permission::CITIES]);
        Permission::create(['name' => Enums\User\Permission::NOTIFICATIONS]);
        Permission::create(['name' => Enums\User\Permission::BANNERS]);
        Permission::create(['name' => Enums\User\Permission::SETTINGS]);
        Permission::create(['name' => Enums\User\Permission::PROMOCODES]);
        Permission::create(['name' => Enums\User\Permission::HELP_SECTIONS]);
        Permission::create(['name' => Enums\User\Permission::CONTACTS]);
        Permission::create(['name' => Enums\User\Permission::DELIVER]);
    }

    public function down(): void
    {
        // RESET CACHED ROLES AND PERMISSIONS
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::query()->where(['name' => Enums\User\Permission::DASHBOARD])->delete();
        Permission::query()->where(['name' => Enums\User\Permission::ORDERS])->delete();
        Permission::query()->where(['name' => Enums\User\Permission::CLIENTS])->delete();
        Permission::query()->where(['name' => Enums\User\Permission::MANAGERS])->delete();
        Permission::query()->where(['name' => Enums\User\Permission::COURIERS])->delete();
        Permission::query()->where(['name' => Enums\User\Permission::CATEGORIES])->delete();
        Permission::query()->where(['name' => Enums\User\Permission::GENRES])->delete();
        Permission::query()->where(['name' => Enums\User\Permission::PRODUCTS])->delete();
        Permission::query()->where(['name' => Enums\User\Permission::CITIES])->delete();
        Permission::query()->where(['name' => Enums\User\Permission::NOTIFICATIONS])->delete();
        Permission::query()->where(['name' => Enums\User\Permission::BANNERS])->delete();
        Permission::query()->where(['name' => Enums\User\Permission::SETTINGS])->delete();
        Permission::query()->where(['name' => Enums\User\Permission::PROMOCODES])->delete();
        Permission::query()->where(['name' => Enums\User\Permission::HELP_SECTIONS])->delete();
        Permission::query()->where(['name' => Enums\User\Permission::CONTACTS])->delete();
        Permission::query()->where(['name' => Enums\User\Permission::DELIVER])->delete();
    }
}

