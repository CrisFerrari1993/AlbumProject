<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GenreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake() -> unique() -> randomElement(['Rock', 'Blues', 'Hip-Hop', 'Dubstep', 'Chillout', 'Rap', 'Trap', 'Metal', 'Gospel', 'Country', 'Techno', 'Electronic', 'D&B', 'ChillStep', 'Liquid', 'HardCore', 'Reggae', 'House', 'Gore', 'HardRock']),
        ];
    }
}
