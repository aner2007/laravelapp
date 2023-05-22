<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AccommodationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
{
    return [
        'name' => $this->faker->company(),
        'description' => $this->faker->paragraph(),
        'price' => $this->faker->numberBetween(50, 500),
    ];
}

}
