<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FieldImages>
 */
class FieldImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image_name' => $this->faker->imageUrl(640, 480, 'sports', true), // Generates a random image URL
            'field_id' => \App\Models\Field::factory(), // Generates a field if one doesn't exist
        ];
    }
}
