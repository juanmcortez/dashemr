<?php

namespace Database\Factories\Settings;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Settings\Options>
 */
class OptionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'listType'      => 'list',
            'listName'      => 'Parent List',
            'listID'        => 'parent',
            'itemOrder'     => 0,
            'isDefault'     => false,
        ];
    }
}
