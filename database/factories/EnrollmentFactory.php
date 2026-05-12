<?php

namespace Database\Factories;

use App\Models\Enrollment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Enrollment>
 */
class EnrollmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'student_id' => \App\Models\Student::inRandomOrder()->first()->id ?? \App\Models\Student::factory(),
        'course_id' => \App\Models\Course::inRandomOrder()->first()->id ?? \App\Models\Course::factory(),
    ];
}
}
