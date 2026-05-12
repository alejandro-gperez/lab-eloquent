<?php

namespace Database\Factories;

use App\Models\Submission;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Submission>
 */
class SubmissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'assignment_id' => \App\Models\Assignment::inRandomOrder()->first()->id ?? \App\Models\Assignment::factory(),
        'student_id' => \App\Models\Student::inRandomOrder()->first()->id ?? \App\Models\Student::factory(),
        'content' => $this->faker->paragraph(),
    ];
}
}
