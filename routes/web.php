<?php

/**
 * EduMind AI — Web Routes
 * @author Prof. NADIR MOHAMED ANOUAR
 */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AIController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Public Routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Authentication
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Routes
Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Students CRUD
    Route::resource('students', StudentController::class);

    // Courses CRUD
    Route::resource('courses', CourseController::class);

    // Quiz IA
    Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
    Route::post('/quiz/generate', [QuizController::class, 'generate'])->name('quiz.generate');
    Route::post('/quiz/submit', [QuizController::class, 'submit'])->name('quiz.submit');

    // AI API
    Route::post('/api/ai/chat', [AIController::class, 'chat'])->name('ai.chat');
    Route::post('/api/ai/analyze', [AIController::class, 'analyzePerformance'])->name('ai.analyze');
});
