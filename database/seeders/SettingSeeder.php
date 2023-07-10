<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        Setting::create([
            'register_count' => 3,
            'register_amount' => 1000,
            'order_count' => 5,
            'order_amount' => 5000,
        ]);
    }
}
