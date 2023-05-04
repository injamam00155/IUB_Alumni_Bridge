<?php

namespace Database\Seeders;

use App\Models\JobPost;
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



            JobPost::factory()->count(10)->create();

    }
}
