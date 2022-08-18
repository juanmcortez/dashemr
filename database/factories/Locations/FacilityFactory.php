<?php

namespace Database\Factories\Locations;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Locations\Facility>
 */
class FacilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type   = fake()->randomElement(['individual', 'group']);
        $genre  = fake()->randomElement(['male', 'female']);
        return [
            'fillingAs'                 => $type,
            'groupName'                 => ($type == 'group') ? fake()->company() : null,
            'firstName'                 => ($type == 'group') ? null : fake()->firstName($genre),
            'middleName'                => ($type == 'group') ? null : fake()->firstName($genre),
            'lastName'                  => ($type == 'group') ? null : fake()->lastName(),
            'street'                    => fake()->streetName(),
            'city'                      => fake()->city(),
            'zip'                       => fake()->randomNumber(5),
            'country'                   => fake()->countryCode(),
            'phone'                     => fake()->phoneNumber(),
            'email'                     => fake()->safeEmail(),
            'phone'                     => fake()->phoneNumber(),
            'fax'                       => fake()->phoneNumber(),
            'email'                     => fake()->companyEmail(),
            'website'                   => fake()->url(),
            'serviceLocation'           => fake()->randomElement([false, true]),
            'billingLocation'           => fake()->randomElement([false, true]),
            'primaryBusinessEntity'     => fake()->randomElement([false, true]),
            'referenceLab'              => fake()->randomElement([false, true]),
            'acceptsAssigment'          => fake()->randomElement([false, true]),
            'creditCardsAccepted'       => 'mastercard, visa, discover, amex',
            'domainIdentifier'          => '50D' . fake()->randomDigit(7),
            'facilityNPI'               => fake()->randomDigit(10),
            'taxIDType'                 => 'EI',
            'placeOfServiceID'          => 81,
        ];
    }
}
