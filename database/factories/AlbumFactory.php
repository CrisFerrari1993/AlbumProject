<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake() -> words(3, true),
            'publications_date' => fake() -> dateTimeBetween('-10 year', 'now'),
            'album_img' => null,
            'rating' => fake() -> numberBetween(0, 10),
        ];
    }
}
