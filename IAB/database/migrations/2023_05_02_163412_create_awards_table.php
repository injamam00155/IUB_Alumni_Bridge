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
        Schema::create('award_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('postID');
            $table->string('awardTitle');
            $table->string('awardDescription');
            $table->date('awardDate');
            $table->string('awardImageURL');
            // Add any other columns you need for the awards table
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
        Schema::dropIfExists('awards');
    }
};
