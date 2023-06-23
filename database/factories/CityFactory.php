<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CityFactory extends Factory
{
    public function definition(): array
    {
        return  [
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
    }
}
