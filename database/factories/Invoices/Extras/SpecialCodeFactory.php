<?php

namespace Database\Factories\Invoices\Extras;

use App\Models\Invoices\Charge;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoices\Extras\SpecialCode>
 */
class SpecialCodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'charge' => Charge::class,
        ];
    }
}
