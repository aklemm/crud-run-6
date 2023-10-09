<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    public function definition(): array
    {
        return [
            'owner' => User::factory()->create()->id,
            'name' => fake()->words(3, true),
            'description' => fake()->text(),
        ];
    }
}
