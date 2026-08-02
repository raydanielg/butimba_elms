<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete()->after('id');
            $table->string('payment_slip_path')->nullable()->after('declaration_confirmed');
            $table->text('admin_notes')->nullable()->after('status');
            $table->timestamp('reviewed_at')->nullable()->after('admin_notes');
            $table->foreignId('reviewed_by')->nullable()->constrained('users')->nullOnDelete()->after('reviewed_at');
        });
    }

    public function down(): void
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['reviewed_by']);
            $table->dropColumn(['user_id', 'payment_slip_path', 'admin_notes', 'reviewed_at', 'reviewed_by']);
        });
    }
};
