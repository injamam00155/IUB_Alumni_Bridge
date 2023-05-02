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
        Schema::create('alumni', function (Blueprint $table) {
            $table->string('userEmail')->primary();
            $table->string('designation')->nullable();
            $table->string('currentWorkPlace')->nullable();
            $table->year('graduationYear')->nullable();
            // Add any other columns you need for the alumni table
            // $table->timestamps();

            // Add foreign key constraint to link with students table
            $table->foreign('userEmail')->references('userEmail')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnis');
    }
};
