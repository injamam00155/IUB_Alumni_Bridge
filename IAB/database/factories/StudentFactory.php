<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Create a new user and obtain the userEmail
        $user = User::factory()->create();

        return [
            'userEmail' => $user->userEmail,
            'firstName' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'iubId' => $this->faker->unique()->numberBetween(10000000, 99999999),
            'school' => $this->faker->optional()->company,
            'linkedIn' => $this->faker->optional()->url,
            'facebook' => $this->faker->optional()->url,
            'contactNo' => $this->faker->optional()->phoneNumber,
            'dob' => $this->faker->optional()->date(),
            'profilePictureURL' => $this->faker->optional()->imageUrl(),
        ];
    }
}