<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Course Model — EduMind AI
 * @author Prof. NADIR MOHAMED ANOUAR
 */
class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'category', 'description', 'instructor',
        'duration', 'level', 'icon', 'color',
    ];

    /**
     * Relation : Cours a plusieurs étudiants
     */
    public function students()
    {
        return $this->belongsToMany(Student::class, 'course_student')
            ->withPivot('progress', 'grade')
            ->withTimestamps();
    }
}
