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
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('commentID');
            $table->dateTime('commentDateTime');
            $table->string('description');
            $table->string('userEmail');
            $table->string('postID');

            $table->foreign('userEmail')->references('userEmail')->on('users');
            $table->foreign('postID')->references('postID')->on('posts');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
