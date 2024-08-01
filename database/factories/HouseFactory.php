<?php

namespace Database\Factories;

use App\Models\House;
use Illuminate\Database\Eloquent\Factories\Factory;

class HouseFactory extends Factory
{
    protected $model = House::class;

    public function definition()
    {
        return [
            'house_type' => $this->faker->randomElement(['Chalet', 'Twin House', 'Villa']),
            'availability' => $this->faker->randomElement([0, 1, 2]),
            'total_area' => $this->faker->numberBetween(100, 500),
            'number_of_bedrooms' => $this->faker->numberBetween(1, 5),
            'number_of_bathrooms' => $this->faker->numberBetween(1, 4),
            'main_picture' => $this->faker->imageUrl(),
        ];
    }
}
