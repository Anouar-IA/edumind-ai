<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Quiz Model — EduMind AI
 * @author Prof. NADIR MOHAMED ANOUAR
 */
class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'subject', 'questions', 'total_questions',
        'duration_minutes', 'generated_by_ai', 'course_id',
    ];

    protected $casts = [
        'questions'       => 'array',
        'generated_by_ai' => 'boolean',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
