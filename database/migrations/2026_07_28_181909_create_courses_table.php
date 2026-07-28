<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_sw');
            $table->string('category'); // Degree, Diploma, Certificate
            $table->text('description_en');
            $table->text('description_sw');
            $table->string('duration_en');
            $table->string('duration_sw');
            $table->text('requirements_en')->nullable();
            $table->text('requirements_sw')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
