<?php

namespace Database\Factories\Invoices\Extras;

use App\Models\Invoices\Encounter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoices\Extras\Problem>
 */
class ProblemFactory extends Factory
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
        ];
    }
}
