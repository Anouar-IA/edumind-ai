<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * @author Prof. NADIR MOHAMED ANOUAR
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subject');
            $table->json('questions');
            $table->integer('total_questions');
            $table->integer('duration_minutes')->default(15);
            $table->boolean('generated_by_ai')->default(true);
            $table->foreignId('course_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
