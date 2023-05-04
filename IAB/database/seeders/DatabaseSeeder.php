<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // UserSeeder::class,
            // StudentSeeder::class,
            // AdminSeeder::class,
            // CurrentStudentSeeder::class,
            // AlumniSeeder::class,
            // PostSeeder::class,
            // QuerySeeder::class,
            JobSeeder::class,
            // EventSeeder::class,
            // AwardSeeder::class,
            // CommentSeeder::class,
            // BookMarkSeeder::class,

        ]);
    }
}
