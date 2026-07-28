<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address', 45)->nullable();
            $table->string('user_agent', 500)->nullable();
            $table->string('page_visited', 255)->nullable();
            $table->string('referrer', 500)->nullable();
            $table->date('visit_date');
            $table->timestamps();

            $table->index('visit_date');
            $table->index('ip_address');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
