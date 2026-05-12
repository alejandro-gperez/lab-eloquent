<?php

use Illuminate\Support\Facades\Route;

use App\Models\Student;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Assignment;
use App\Models\Submission;

Route::get('/q1', function () {
    return Student::with('courses')->get();
});

Route::get('/q2', function () {
    return Course::withCount('students')
        ->having('students_count', '>', 5)
        ->get();
});

Route::get('/q3', function () {
    return Course::orderBy('created_at', 'desc')->get();
});

Route::get('/q4', function () {
    return Submission::whereHas('grade', function ($q) {
        $q->where('score', '>', 70);
    })->get();
});

Route::get('/q5', function () {
    return Teacher::with('courses')->get();
});

//EagerLoading
Route::get('/q6', function () {
    return Course::with(['students', 'teachers'])->get();
});

