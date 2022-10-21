<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'velo'=>$this->faker->word(),
            'dateDebut'=>$this->faker->dateTime(),
            'dateFin'=>$this->faker->dateTime(),
            'isPaid'=>$this->faker->boolean(),
            'status'=>$this->faker->boolean()
        ];
    }
}
