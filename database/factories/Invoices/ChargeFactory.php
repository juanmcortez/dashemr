<?php

namespace Database\Factories\Invoices;

use App\Models\Invoices\Encounter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoices\Charge>
 */
class ChargeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'encounter' => Encounter::class,
            'codeType'  => fake()->randomElement(['CPT4', 'HCPCS', 'ANES', 'CVX']),
            'code'      => fake()->randomNumber(5),
            'codeText'  => fake()->realTextBetween(20, 60),
            'fee'       => fake()->randomFloat(2, 10, 999),
            'units'     => fake()->randomNumber(1),
        ];
    }
}
