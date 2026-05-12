<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
{
    \App\Models\Category::factory(10)->create();
    \App\Models\Course::factory(100)->create();

    \App\Models\Student::factory(1000)->create();
    \App\Models\Teacher::factory(100)->create();

    \App\Models\Enrollment::factory(3000)->create();

    \App\Models\Lesson::factory(1000)->create();
    \App\Models\Assignment::factory(2000)->create();

    \App\Models\Submission::factory(3000)->create();
    \App\Models\Grade::factory(3000)->create();
}
}
