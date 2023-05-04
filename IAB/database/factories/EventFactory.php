<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'postID' => Post::inRandomOrder()->first()->postID,
            'eventTitle' => $this->faker->sentence,
            'eventDescription' => $this->faker->paragraph,
            'eventDate' => $this->faker->date(),
            'eventImageURL' => $this->faker->imageUrl(),
            'eventLocation' => $this->faker->address,
        ];
    }
}
