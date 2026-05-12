<?php

namespace Database\Factories;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'course_id' => \App\Models\Course::inRandomOrder()->first()->id ?? \App\Models\Course::factory(),
        'title' => $this->faker->sentence(),
    ];
}
}
