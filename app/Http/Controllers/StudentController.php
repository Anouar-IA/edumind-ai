<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

/**
 * Student Controller — CRUD Operations
 * @author Prof. NADIR MOHAMED ANOUAR
 */
class StudentController extends Controller
{
    /**
     * Afficher la liste des étudiants
     */
    public function index(Request $request)
    {
        $query = Student::query();

        // Recherche
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('filiere', 'like', "%{$search}%");
            });
        }

        // Filtrage par statut
        if ($request->has('status') && $request->status) {
            $query->where('status', $request->status);
        }

        $students = $query->orderBy('created_at', 'desc')->paginate(15);

        return view('students.index', compact('students'));
    }

    /**
     * Afficher le formulaire de création
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Enregistrer un nouvel étudiant
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|unique:students,email',
            'filiere' => 'required|string|max:100',
            'niveau'  => 'required|string|max:50',
            'phone'   => 'nullable|string|max:20',
        ]);

        $validated['status'] = 'active';
        $validated['average'] = 0;

        Student::create($validated);

        return redirect()->route('students.index')
            ->with('success', 'Étudiant ajouté avec succès !');
    }

    /**
     * Afficher un étudiant
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Afficher le formulaire de modification
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Mettre à jour un étudiant
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|unique:students,email,' . $student->id,
            'filiere' => 'required|string|max:100',
            'niveau'  => 'required|string|max:50',
            'phone'   => 'nullable|string|max:20',
            'status'  => 'in:active,absent,graduated',
        ]);

        $student->update($validated);

        return redirect()->route('students.index')
            ->with('success', 'Étudiant mis à jour !');
    }

    /**
     * Supprimer un étudiant
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
            ->with('success', 'Étudiant supprimé.');
    }
}
