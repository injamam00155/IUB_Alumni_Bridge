<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;
use App\Models\Post;

class JobSeeder extends Seeder
{
    /**
     * Run the seeder.
     *
     * @return void
     */
    public function run(){



            Job::factory()->count(10)->create();

    }
}
