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
        Schema::rename('queries', 'query_posts');
        Schema::rename('awards', 'award_posts');
        Schema::rename('events', 'event_posts');
        Schema::rename('jobs', 'job_posts');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('query_posts', 'queries');
        Schema::rename('award_posts', 'awards');
        Schema::rename('event_posts', 'events');
        Schema::rename('job_posts', 'jobs');
    }
};
