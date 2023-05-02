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
            // Add any other columns you need for the jobs table
            $table->timestamps();

            // Add foreign key constraint to link with posts table
            $table->foreign('postID')->references('postID')->on('posts');
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
