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
        Schema::create('current_students', function (Blueprint $table) {
            $table->string('userEmail')->primary();
            $table->string('program');
            $table->string('major');
            $table->string('minor');
            // Add any other columns you need for the current_students table
            // $table->timestamps();

            // Add foreign key constraint to link with students table
            $table->foreign('userEmail')->references('userEmail')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('current_students');
    }
};
