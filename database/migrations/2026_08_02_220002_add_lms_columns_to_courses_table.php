<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('code')->nullable()->unique()->after('id');
            $table->foreignId('programme_id')->nullable()->constrained()->nullOnDelete()->after('code');
            $table->foreignId('department_id')->nullable()->constrained()->nullOnDelete()->after('programme_id');
            $table->foreignId('teacher_id')->nullable()->constrained('users')->nullOnDelete()->after('department_id');
            $table->enum('type', ['Core', 'Subject', 'Practical'])->default('Core')->after('category');
            $table->enum('medium', ['Kiswahili', 'Kiswahili & English', 'English'])->default('Kiswahili')->after('type');
            $table->boolean('is_active')->default(true)->after('requirements_sw');
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign(['programme_id']);
            $table->dropForeign(['department_id']);
            $table->dropForeign(['teacher_id']);
            $table->dropColumn(['code', 'programme_id', 'department_id', 'teacher_id', 'type', 'medium', 'is_active']);
        });
    }
};
