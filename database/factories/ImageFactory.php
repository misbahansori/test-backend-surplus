<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'   => $this->faker->word(),
            'file'   => $this->faker->imageUrl(),
            'enable' => $this->faker->boolean(),
        ];
    }
}
