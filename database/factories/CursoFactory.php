<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'Llave_Curso' =>  $this->faker->numberBetween(110, 250),
            'Kit_Robotica' =>  $this->faker->word(),
            'Nombre_Curso' =>  $this->faker->word(),

        ];
    }
}
