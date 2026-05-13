<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Quiz Controller — Quiz IA Auto-Généré
 * @author Prof. NADIR MOHAMED ANOUAR
 */
class QuizController extends Controller
{
    public function index()
    {
        return view('quiz.index');
    }

    /**
     * Générer un quiz avec l'IA
     */
    public function generate(Request $request)
    {
        $request->validate([
            'subject' => 'required|string',
            'count'   => 'integer|min:3|max:20',
        ]);

        // AI-generated questions (simulated)
        $questions = [
            [
                'question' => 'Quel algorithme est utilisé pour la classification supervisée ?',
                'options'  => ['K-Means', 'Random Forest', 'DBSCAN', 'PCA'],
                'correct'  => 1,
                'explanation' => 'Random Forest est un algorithme de classification supervisée basé sur des arbres de décision.',
            ],
            [
                'question' => 'Quelle est la complexité du tri rapide en moyenne ?',
                'options'  => ['O(n)', 'O(n²)', 'O(n log n)', 'O(log n)'],
                'correct'  => 2,
                'explanation' => 'Le Quick Sort a une complexité moyenne de O(n log n).',
            ],
        ];

        return response()->json([
            'success'   => true,
            'questions' => $questions,
            'generated_by' => 'EduMind AI Engine',
        ]);
    }

    /**
     * Soumettre et corriger un quiz
     */
    public function submit(Request $request)
    {
        $request->validate(['answers' => 'required|array']);

        $score = 0;
        $total = count($request->answers);
        // Score calculation logic here

        return response()->json([
            'success' => true,
            'score'   => $score,
            'total'   => $total,
            'percentage' => $total > 0 ? round(($score / $total) * 100) : 0,
        ]);
    }
}
