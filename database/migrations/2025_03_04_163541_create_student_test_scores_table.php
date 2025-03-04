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
        Schema::create('student_test_scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->integer('ielts')->nullable();
            $table->integer('pte')->nullable();
            $table->integer('sat')->nullable();
            $table->integer('toefl')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_test_scores');
    }
};