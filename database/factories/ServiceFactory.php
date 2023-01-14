<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\Service;
use App\Models\Succurcale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'succurcale_id' => function () {
                return Succurcale::all()->random()->id;
            },
            'name' => fake()->sentence(),
            'slug' => fake()->slug(),
            'description' => fake()->paragraph(),
        ];
    }
}
