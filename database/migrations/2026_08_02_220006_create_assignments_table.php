<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->cascadeOnDelete();
            $table->foreignId('topic_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('title_en');
            $table->string('title_sw');
            $table->text('instructions_en');
            $table->text('instructions_sw')->nullable();
            $table->decimal('max_marks', 6, 2)->default(100);
            $table->dateTime('deadline');
            $table->integer('timer_minutes')->nullable();
            $table->boolean('allow_late_submission')->default(false);
            $table->boolean('is_published')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
