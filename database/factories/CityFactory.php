<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CityFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => json_encode(['city' => [fake()->numberBetween(1,17), fake()->city]]),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
