<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'field_id' => \App\Models\Field::factory(), // Generates a field if one doesn't exist
            'user_id' => \App\Models\User::factory(), // Generates a user if one doesn't exist
            'start_time' => $this->faker->dateTimeBetween('now', '+1 month'), // Random start time within the next month
            'duration_in_hours' => $this->faker->numberBetween(1, 5), // Random duration between 1 to 5 hours
            'total_price' => function (array $attributes) {
                $field = \App\Models\Field::find($attributes['field_id']);
                return $field ? $field->price_per_hour * $attributes['duration_in_hours'] : 0;
            },
        ];
    }
}
