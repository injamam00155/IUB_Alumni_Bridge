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
        Schema::create('jobs', function (Blueprint $table) {
            $table->string('postID')->primary();
            $table->string('jobTitle');
            $table->string('companyName');
            $table->string('location');
            $table->text('jobDescription');
            $table->text('responsibility');
            $table->text('requirement');
            $table->string('contactEmail');
            $table->string('userEmail');
            // Add any other columns you need for the jobs table
            // $table->timestamps();

            // Add foreign key constraint to link with posts table
            $table->foreign('postID')->references('postID')->on('posts')->onDelete('cascade');
            $table->foreign('userEmail')->references('userEmail')->on('alumni')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
