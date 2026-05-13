<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

/**
 * Dashboard Controller — EduMind AI
 * @author Prof. NADIR MOHAMED ANOUAR
 */
class DashboardController extends Controller
{
    /**
     * Afficher le tableau de bord avec les statistiques
     */
    public function index()
    {
        $stats = [
            'total_students'  => Student::count(),
            'active_students' => Student::where('status', 'active')->count(),
            'total_courses'   => Course::count(),
            'success_rate'    => $this->calculateSuccessRate(),
            'quiz_generated'  => 5420, // From AI service
        ];

        $recentStudents = Student::orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $performanceData = $this->getPerformanceData();
        $distributionData = $this->getDistributionData();

        return view('dashboard', compact(
            'stats',
            'recentStudents',
            'performanceData',
            'distributionData'
        ));
    }

    /**
     * Calculer le taux de réussite global
     */
    private function calculateSuccessRate(): float
    {
        $students = Student::all();
        if ($students->isEmpty()) return 0;

        $passing = $students->where('average', '>=', 10)->count();
        return round(($passing / $students->count()) * 100, 1);
    }

    /**
     * Obtenir les données de performance mensuelles
     */
    private function getPerformanceData(): array
    {
        return [
            'labels' => ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun'],
            'success_rate' => [65, 72, 78, 82, 88, 92],
            'participation' => [70, 68, 80, 85, 90, 95],
        ];
    }

    /**
     * Obtenir la répartition par filière
     */
    private function getDistributionData(): array
    {
        return [
            'labels' => ['Informatique', 'Mathématiques', 'Physique', 'IA & ML'],
            'values' => [35, 25, 20, 20],
        ];
    }
}
