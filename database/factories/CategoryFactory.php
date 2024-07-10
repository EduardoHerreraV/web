<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(), // Usar word para generar un nombre de categoría más realista
            'description' => $this->faker->sentence() // U
        ];
    }
}
