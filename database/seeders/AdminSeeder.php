<?php

namespace Database\Seeders;

use App\Enums\Gender\Type;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'surname' => 'adminbek',
            'email' => 'admin@gmail.com',
            'gender' => Type::UNKNOWN,
            'password' => Hash::make('admin'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
        Role::create([
            'name' => 'admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $admin->assignRole(\App\Enums\User\Role::SUPER_ADMIN);
    }
}
