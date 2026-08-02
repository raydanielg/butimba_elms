<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('course_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('title_en');
            $table->string('title_sw');
            $table->text('body_en');
            $table->text('body_sw')->nullable();
            $table->enum('scope', ['college', 'course'])->default('college');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('live_classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('title_en');
            $table->string('title_sw');
            $table->text('description_en')->nullable();
            $table->text('description_sw')->nullable();
            $table->string('meeting_link');
            $table->string('platform')->default('Google Meet');
            $table->dateTime('scheduled_at');
            $table->integer('duration_minutes')->default(60);
            $table->boolean('is_completed')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('live_classes');
        Schema::dropIfExists('announcements');
    }
};
