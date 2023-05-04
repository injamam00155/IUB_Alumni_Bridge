<?php

namespace Database\Seeders;

use App\Models\Event;
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


            Event::factory()->count(11)->create();

    }
}
