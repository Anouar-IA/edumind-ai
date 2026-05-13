<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * AI Controller — Intelligence Artificielle
 * @author Prof. NADIR MOHAMED ANOUAR
 */
class AIController extends Controller
{
    /**
     * Traiter une conversation avec le chatbot IA
     */
    public function chat(Request $request)
    {
        $request->validate(['message' => 'required|string|max:500']);

        $message = strtolower($request->message);

        // AI Response Engine (Rule-based + extensible pour API OpenAI)
        $responses = [
            'bonjour' => 'Bonjour ! 👋 Je suis l\'assistant IA d\'EduMind. Comment puis-je vous aider ?',
            'cours'   => 'Nous proposons des cours en Informatique, Mathématiques, Physique et IA.',
            'quiz'    => 'Les quiz sont générés automatiquement par notre moteur IA !',
            'aide'    => 'Je peux vous aider avec les cours, quiz, inscriptions et notes.',
            'note'    => 'Consultez vos notes dans le Dashboard.',
        ];

        $response = 'Je suis encore en apprentissage ! Essayez "cours", "quiz" ou "aide".';
        foreach ($responses as $key => $value) {
            if (str_contains($message, $key)) {
                $response = $value;
                break;
            }
        }

        return response()->json([
            'success'  => true,
            'response' => $response,
            'model'    => 'edumind-ai-v1',
        ]);
    }

    /**
     * Analyser les performances d'un étudiant avec l'IA
     */
    public function analyzePerformance(Request $request)
    {
        $request->validate(['student_id' => 'required|exists:students,id']);

        // Simulated AI analysis
        $analysis = [
            'prediction'      => 'Réussite probable (85%)',
            'strengths'       => ['Algorithmique', 'Programmation PHP'],
            'weaknesses'      => ['Base de données', 'Réseaux'],
            'recommendation'  => 'Renforcer les TP en bases de données avancées.',
            'confidence'      => 0.85,
        ];

        return response()->json([
            'success'  => true,
            'analysis' => $analysis,
        ]);
    }
}
