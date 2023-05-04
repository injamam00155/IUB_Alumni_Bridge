<?php

namespace Database\Seeders;

use App\Models\EventPost;
use Illuminate\Database\Seeder;
use App\Models\Post;

class EventSeeder extends Seeder
{
    /**
     * Run the seeder.
     *
     * @return void
     */
    public function run()
    {


            EventPost::factory()->count(11)->create();

    }
}
