<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('full_name');
            $table->enum('gender', ['Mke', 'Mme']);
            $table->date('dob');
            $table->string('region');
            $table->string('district');
            $table->string('ward');
            $table->text('address');
            $table->string('phone');
            $table->string('relative_phone');
            $table->enum('employment_status', ['Nimeajiriwa', 'Sijaajiriwa']);
            $table->string('previous_profession');
            $table->string('college_name');
            $table->integer('graduation_year');
            $table->string('certificate_number');
            $table->string('applied_course');
            $table->boolean('declaration_confirmed')->default(false);
            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
