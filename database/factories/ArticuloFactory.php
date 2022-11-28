<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo' => $this->faker->word(4),
            'descripcion' => $this->faker->word(50),
            'cantidad' => $this->faker->integer(),
            'precio' => $this->randomFloat(2),
        ];
    }
}
