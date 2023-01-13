<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;
use App\Models\Service;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ranndez_Vous>
 */
class Ranndez_VousFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'client_id' => function () {
                return Client::all()->random()->id;
            },
            'service_id' => function () {
                return Service::all()->random()->id;
            },
            'status' => fake()->randomElement(['confirmed', 'canceled','non confirmed','finished']),
            'comment' => fake()->paragraph(),
            'appointment_date' => fake()->dateTimeBetween('now', '+30 days'),
            'appointment_time' => fake()->time()
        ];
    }
}
