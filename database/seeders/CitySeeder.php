<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    public array $cities = [
        [
            'name' => [
                'kz' => 'Алматы',
                'ru' => 'Алматы',
            ],
        ],
        [
            'name' => [
                'kz' => 'Астана',
                'ru' => 'Астана',
            ],
        ],
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


    }
}
