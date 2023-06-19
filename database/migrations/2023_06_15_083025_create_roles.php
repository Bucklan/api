<?php

use App\Enums as Enums;
use App\Models\Role;
use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\PermissionRegistrar;

class CreateRoles extends Migration
{
    public function up(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Role::create(['name' => Enums\User\Role::SUPER_ADMIN]);
        Role::create(['name' => Enums\User\Role::DEVELOPER]);
        Role::create(['name' => Enums\User\Role::MANAGER]);
        Role::create(['name' => Enums\User\Role::COURIER]);
    }

    public function down(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Role::findByName(Enums\User\Role::SUPER_ADMIN)->delete();
        Role::findByName(Enums\User\Role::DEVELOPER)->delete();
        Role::findByName(Enums\User\Role::MANAGER)->delete();
        Role::findByName(Enums\User\Role::COURIER)->delete();
    }
};
