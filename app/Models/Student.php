<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Student Model — EduMind AI
 * @author Prof. NADIR MOHAMED ANOUAR
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $filiere
 * @property string $niveau
 * @property string $phone
 * @property string $status
 * @property float $average
 */
class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'filiere', 'niveau',
        'phone', 'status', 'average',
    ];

    protected $casts = [
        'average' => 'float',
    ];

    /**
     * Relation : Étudiant a plusieurs cours
     */
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_student')
            ->withPivot('progress', 'grade')
            ->withTimestamps();
    }

    /**
     * Scope : Étudiants actifs
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /**
     * Vérifier si l'étudiant a réussi
     */
    public function hasPassed(): bool
    {
        return $this->average >= 10;
    }
}
