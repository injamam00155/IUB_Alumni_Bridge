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
        Schema::create('events', function (Blueprint $table) {
            $table->unsignedInteger('postID')->primary();
            $table->string('eventTitle');
            $table->string('eventDescription');
            $table->date('eventDate');
            $table->string('eventImageURL');
            $table->string('eventLocation');
            // Add any other columns you need for the events table
            // $table->timestamps();

            // Add foreign key constraint to link with posts table
            $table->foreign('postID')->references('postID')->on('posts')->onUpdate('CASCADE')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
