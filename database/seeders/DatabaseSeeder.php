<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(DummySeeder::class);
        $this->call(DeveloperSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(SettingSeeder::class);
    }
}
