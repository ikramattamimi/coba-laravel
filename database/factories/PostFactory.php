<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(10,20)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(mt_rand(10,25)),
            'body' => $this->faker->paragraph(mt_rand(18,50)),
            'category_id' => mt_rand(1,2),
            'user_id' => mt_rand(1,5),
        ];
    }
}