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
            $table->foreignId('university_id')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('program_level')->nullable();
            $table->string('course_duration')->nullable();
            $table->float('tuition_fees')->nullable();
            $table->float('application_fees')->nullable();
            $table->longText('description')->nullable();

            // Minimum IELTS Scores
            $table->float('min_ielts_reading')->nullable();
            $table->float('min_ielts_writing')->nullable();
            $table->float('min_ielts_listening')->nullable();
            $table->float('min_ielts_speaking')->nullable();
            $table->float('min_ielts_overall')->nullable(); // Minimum IELTS Overall Score

            // Minimum PTE Scores
            $table->integer('min_pte_reading')->nullable();
            $table->integer('min_pte_writing')->nullable();
            $table->integer('min_pte_listening')->nullable();
            $table->integer('min_pte_speaking')->nullable();
            $table->integer('min_pte_overall')->nullable(); // Minimum PTE Overall Score

            // Minimum SAT Scores
            $table->integer('min_sat_reading')->nullable();
            $table->integer('min_sat_writing')->nullable();
            $table->integer('min_sat_listening')->nullable();
            $table->integer('min_sat_speaking')->nullable();
            $table->integer('min_sat_overall')->nullable(); // Minimum SAT Overall Score

            // Minimum TOEFL Scores
            $table->integer('min_toefl_reading')->nullable();
            $table->integer('min_toefl_writing')->nullable();
            $table->integer('min_toefl_listening')->nullable();
            $table->integer('min_toefl_speaking')->nullable();
            $table->integer('min_toefl_overall')->nullable(); // Minimum TOEFL Overall Score
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