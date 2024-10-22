<?php

namespace Database\Factories;

use App\Models\Field;
use App\Models\User; // Import the User model to reference it in the factory
use Illuminate\Database\Eloquent\Factories\Factory;

class FieldFactory extends Factory
{
    protected $model = Field::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'capacity' => $this->faker->numberBetween(10, 100),
            'address' => $this->faker->address(),
            'user_id' => User::factory(),
        ];
    }
}
