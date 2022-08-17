<?php

namespace Database\Factories\Doctors;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctors\Rendering>
 */
class RenderingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $genre = fake()->randomElement(['male', 'female']);
        $fname = fake()->firstName($genre);
        $lname = fake()->lastName();
        return [
            'firstName'     => $fname,
            'middleName'    => fake()->firstName($genre),
            'lastName'      => $lname,
            'abbreviation'  => Str::upper(substr($fname, 0, 1) . substr($lname, 0, 1)),
            'street'        => fake()->streetName(),
            'city'          => fake()->city(),
            'zip'           => fake()->randomNumber(5),
            'country'       => fake()->countryCode(),
            'phone'         => fake()->phoneNumber(),
            'email'         => fake()->safeEmail(),
        ];
    }
}
