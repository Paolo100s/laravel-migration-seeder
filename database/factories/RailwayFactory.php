<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Railway>
 */
class RailwayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company' => fake() -> company(),
            'start_station' => fake() -> city(),
            'end_station' => fake() -> city(),
            'start_date' => fake() -> dateTimeBetween ('-2 day', '-1 day'),
            'end_date' => fake() -> dateTimeBetween('-1 day', '0 day'),
            'train_code' => fake() -> unique() -> numerify('##########'),
            'carriage_count'=> fake() -> numberBetween('1', '20'),
            'in_time' => fake() -> boolean(),
            'deleted' => fake() -> boolean()
        ];
    }
}
