<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker::create();

        return [
            'main_img' => $faker->imageUrl($width = 600, $height = 400),
            'caption' => $faker->realText($maxNbchars = 25),
            'body' => $faker->realText($maxNbchars = 150),
            'date' => $faker->date($format = 'd-M-Y', $max = 'now'),
            'begin_time' => $faker->time($format = 'H:i', $max = '11:00'),
            'end_time' => $faker->time($format = 'H:i', $max = '20:00'),
            'location' => $faker->city()
        ];
    }
}
