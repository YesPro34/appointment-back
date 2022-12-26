<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class servicesFactory extends Factory
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
            'role_id' =>function(){
                return Role::all()->random()->id;
            },
            'name' => fake()->name(),
            'slug' => fake()->slug(),
            'description' => fake()->paragraph(),
        ];
    }
}