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
            'main_img' => $faker->imageUrl($width = 600, $height = 400, true, 'Faker'),
            'caption' => $faker->realText($maxNbchars = 25),
            'excerpt' => $faker->realText($maxNbchars = 200),
            'body' => $faker->realText($maxNbchars = 600),
            'date' => $faker->date($format = 'Y-m-d', $max = '1 year'),
            // 'date' => $faker->dateTimeBetween($startDate = '-3 years', $endDate = '2 year', $timezone = null),
            'begin_time' => $faker->time($format = 'H:i', $max = '11:00'),
            'end_time' => $faker->time($format = 'H:i', $max = '20:00'),
            'location' => $faker->city()
        ];
    }
}
