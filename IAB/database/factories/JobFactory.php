<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'postID' => Post::inRandomOrder()->first()->postID,
            'jobTitle' => $this->faker->jobTitle,
            'companyName' => $this->faker->company,
            'location' => $this->faker->address,
            'jobDescription' => $this->faker->paragraph,
            'responsibility' => $this->faker->paragraph,
            'requirement' => $this->faker->paragraph,
            'contactEmail' => $this->faker->email,
            'userEmail' => $this->faker->unique()->safeEmail,
        ];
    }
}
