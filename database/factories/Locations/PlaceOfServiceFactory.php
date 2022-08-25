<?php

namespace Database\Factories\Locations;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Locations\PlaceOfService>
 */
class PlaceOfServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code'          => fake()->randomDigit(2),
            'title'         => fake()->words(2),
            'Description'   => fake()->paragraph(4),
        ];
    }
}
