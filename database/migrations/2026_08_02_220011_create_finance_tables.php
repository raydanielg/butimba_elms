<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fee_structures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('programme_id')->nullable()->constrained()->nullOnDelete();
            $table->string('fee_type');
            $table->string('fee_type_sw');
            $table->decimal('amount', 10, 2);
            $table->text('description_en')->nullable();
            $table->text('description_sw')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('student_name')->nullable();
            $table->string('reference')->nullable();
            $table->decimal('amount', 10, 2);
            $table->enum('payment_type', ['registration', 'tuition', 'other'])->default('tuition');
            $table->enum('method', ['bank', 'mobile_money', 'cash', 'other'])->default('bank');
            $table->enum('status', ['pending', 'verified', 'rejected'])->default('pending');
            $table->string('slip_path')->nullable();
            $table->date('payment_date');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
        Schema::dropIfExists('fee_structures');
    }
};
