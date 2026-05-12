<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grade extends Model
{
    use HasFactory;
    protected $fillable = ['submission_id', 'score'];

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }
}
