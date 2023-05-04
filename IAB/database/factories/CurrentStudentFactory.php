<?php

namespace Database\Factories;

use App\Models\CurrentStudent;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CurrentStudent>
 */
class CurrentStudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Get a unique random userEmail from the students table
        $userEmails = Student::pluck('userEmail')->toArray();
        $userEmail = $this->faker->unique()->randomElement($userEmails);

        return [
            'userEmail' => $userEmail,
            'program' => $this->faker->randomElement(['Bachelor', 'Master', 'PhD']),
            'major' => $this->faker->jobTitle,
            'minor' => $this->faker->jobTitle,
        ];
    }
}
