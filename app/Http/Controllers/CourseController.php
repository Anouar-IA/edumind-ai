<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

/**
 * Course Controller — Gestion des Cours
 * @author Prof. NADIR MOHAMED ANOUAR
 */
class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::withCount('students')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'required|string|max:100',
            'description' => 'nullable|string',
            'duration'    => 'required|string|max:20',
            'level'       => 'required|in:Débutant,Intermédiaire,Avancé',
        ]);

        $validated['instructor'] = 'Prof. NADIR MOHAMED ANOUAR';

        Course::create($validated);

        return redirect()->route('courses.index')
            ->with('success', 'Cours créé avec succès !');
    }

    public function show(Course $course)
    {
        $course->load('students');
        return view('courses.show', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'required|string|max:100',
            'description' => 'nullable|string',
            'duration'    => 'required|string|max:20',
            'level'       => 'required|in:Débutant,Intermédiaire,Avancé',
        ]);

        $course->update($validated);

        return redirect()->route('courses.index')
            ->with('success', 'Cours mis à jour !');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index')
            ->with('success', 'Cours supprimé.');
    }
}
