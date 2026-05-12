<?php

namespace Database\Factories;

use App\Models\Assignment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Assignment>
 */
class AssignmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'lesson_id' => \App\Models\Lesson::inRandomOrder()->first()->id ?? \App\Models\Lesson::factory(),
        'title' => $this->faker->sentence(),
    ];
}
}
