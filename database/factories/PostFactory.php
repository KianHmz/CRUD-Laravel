<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'category' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
