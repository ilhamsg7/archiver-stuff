<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Archive>
 */
class ArchiveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'categories_id' => $this->faker->numberBetween(1, 3),
            'letter_number' => $this->faker->unique()->randomNumber(8),
            'slug' => $this->faker->slug,
            'title' => $this->faker->sentence(5),
            'file' => $this->faker->sentence(3),
        ];
    }
}
