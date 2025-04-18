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
        Schema::create('machines', function (Blueprint $table) {
            $table->id();
            $table->string('reg_number')->unique();
            $table->foreignId('machine_type')->constrained('machine_types');
            $table->foreignId('condition')->constrained('machine_conditions');
            $table->foreignId('status')->constrained('machine_statuses');
            $table->foreignId('assigned_operator')->constrained('users')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machines');
    }
};
