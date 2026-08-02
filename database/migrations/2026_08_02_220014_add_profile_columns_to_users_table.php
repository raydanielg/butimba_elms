<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('programme_id')->nullable()->constrained()->nullOnDelete()->after('role');
            $table->enum('status', ['active', 'inactive', 'suspended'])->default('active')->after('programme_id');
            $table->string('registration_number')->nullable()->unique()->after('status');
            $table->string('avatar')->nullable()->after('registration_number');
            $table->text('bio')->nullable()->after('avatar');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['programme_id']);
            $table->dropColumn(['programme_id', 'status', 'registration_number', 'avatar', 'bio']);
        });
    }
};
