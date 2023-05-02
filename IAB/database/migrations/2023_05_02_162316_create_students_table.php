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
        Schema::create('students', function (Blueprint $table) {
            $table->string('userEmail')->primary();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('iubId')->nullable();
            $table->string('school')->nullable();
            $table->string('linkedIn')->nullable();
            $table->string('facebook')->nullable();
            $table->string('contactNo')->nullable();
            $table->date('dob')->nullable();
            $table->string('profilePictureURL')->nullable();
            // Add any other columns you need for the students table
            // $table->timestamps();

            // Add foreign key constraint to link with users table
            $table->foreign('userEmail')->references('userEmail')->on('users')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
