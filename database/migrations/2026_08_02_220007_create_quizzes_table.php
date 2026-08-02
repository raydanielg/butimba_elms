<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->cascadeOnDelete();
            $table->foreignId('topic_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('title_en');
            $table->string('title_sw');
            $table->text('instructions_en')->nullable();
            $table->text('instructions_sw')->nullable();
            $table->integer('time_limit_minutes')->nullable();
            $table->integer('max_attempts')->default(1);
            $table->decimal('max_marks', 6, 2)->default(100);
            $table->boolean('show_results_immediately')->default(true);
            $table->boolean('is_published')->default(false);
            $table->timestamps();
        });

        Schema::create('quiz_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quiz_id')->constrained()->cascadeOnDelete();
            $table->enum('type', ['multiple_choice', 'true_false', 'short_answer']);
            $table->text('question_en');
            $table->text('question_sw')->nullable();
            $table->json('options')->nullable();
            $table->string('correct_answer');
            $table->decimal('marks', 6, 2)->default(1);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quiz_questions');
        Schema::dropIfExists('quizzes');
    }
};
