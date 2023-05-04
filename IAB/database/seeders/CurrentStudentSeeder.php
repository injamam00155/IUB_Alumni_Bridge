<?php

namespace Database\Seeders;

use App\Models\CurrentStudent;
use Illuminate\Database\Seeder;

class CurrentStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 10 current students using the CurrentStudentFactory
        CurrentStudent::factory()->count(10)->create();
    }
}
