<?php


namespace Database\Factories;

use App\Models\CurrentStudent;
use App\Models\Alumni;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumni>
 */
class AlumniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Get a random userEmail that is not in the current_students table
        $currentStudentEmails = CurrentStudent::pluck('userEmail')->toArray();
        $userEmails = Student::whereNotIn('userEmail', $currentStudentEmails)->pluck('userEmail')->toArray();
        $userEmail = $this->faker->unique()->randomElement($userEmails);

        return [
            'userEmail' => $userEmail,
            'designation' => $this->faker->jobTitle,
            'currentWorkPlace' => $this->faker->company,
            'graduationYear' => $this->faker->numberBetween(2000, 2023),
        ];
    }
}

