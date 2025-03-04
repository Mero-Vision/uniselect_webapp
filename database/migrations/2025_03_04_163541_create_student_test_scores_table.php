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
            // IELTS Scores
            $table->float('ielts_reading')->nullable();
            $table->float('ielts_writing')->nullable();
            $table->float('ielts_listening')->nullable();
            $table->float('ielts_speaking')->nullable();
            $table->float('ielts_overall')->nullable(); // Overall IELTS Score

            // PTE Scores
            $table->integer('pte_reading')->nullable();
            $table->integer('pte_writing')->nullable();
            $table->integer('pte_listening')->nullable();
            $table->integer('pte_speaking')->nullable();
            $table->integer('pte_overall')->nullable(); // Overall PTE Score

            // SAT Scores
            $table->integer('sat_reading')->nullable();
            $table->integer('sat_writing')->nullable();
            $table->integer('sat_listening')->nullable();
            $table->integer('sat_speaking')->nullable();
            $table->integer('sat_overall')->nullable(); // Overall SAT Score

            // TOEFL Scores
            $table->integer('toefl_reading')->nullable();
            $table->integer('toefl_writing')->nullable();
            $table->integer('toefl_listening')->nullable();
            $table->integer('toefl_speaking')->nullable();
            $table->integer('toefl_overall')->nullable(); // Overall TOEFL Score
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