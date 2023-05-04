<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\User;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Get a random user email from the users table that is not a student
        $userEmail = User::whereNotIn('userEmail', function ($query) {
            $query->select('userEmail')
                ->from('students');
        })->inRandomOrder()->unique()->value('userEmail');

        return [
            'userEmail' => $userEmail,
        ];
    }
}

