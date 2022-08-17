<?php

namespace Database\Factories\Doctors;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctors\Referring>
 */
class ReferringFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $genre = fake()->randomElement(['male', 'female']);
        return [
            'firstName'     => fake()->firstName($genre),
            'middleName'    => fake()->firstName($genre),
            'lastName'      => fake()->lastName(),
            'street'        => fake()->streetName(),
            'city'          => fake()->city(),
            'zip'           => fake()->randomNumber(5),
            'country'       => fake()->countryCode(),
            'phone'         => fake()->phoneNumber(),
            'email'         => fake()->safeEmail(),
        ];
    }
}
