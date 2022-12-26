<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Role;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'role_id' => function () {
                return Role::all()->random()->id;
            },
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->streetAddress(),
            'web_site' => fake()->url(),
            'cin' => fake()->unique()->regexify('[A-Z]{2}\d{6}'),
            'type' => fake()->randomElement(['normal', 'company'])
        ];
    }
}
