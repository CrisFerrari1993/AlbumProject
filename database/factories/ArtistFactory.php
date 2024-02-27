<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstname' => fake() -> firstName(), 
            'lastname' => fake() -> lastName(), 
            'date_of_birth' => fake() -> dateTimeBetween('-80 year', '-18 year'), 
            'artist_img' => null
        ];
    }
}
