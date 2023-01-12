<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Role;
use App\Models\Succurcale;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Technicien>
 */
class TechnicienFactory extends Factory
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
            'role_id' => function () {
                return Role::all()->random()->id;
            },
            'succurcale_id' =>function(){
                return Succurcale::all()->random()->id;
            },
            'name' => fake()->name(),
            'cin' => fake()->unique()->regexify('[A-Z]{2}\d{6}'),
            'phone' => fake()->phoneNumber(),

            

        ];
    }
}
