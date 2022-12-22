<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TestimonialFactory extends Factory
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
            'img' => $faker->imageUrl($width = 100, $height = 100),
            'name' => $faker->name($gender = null),
            'profession' => $faker->jobTitle(),
            'company' => $faker->optional($weight = 0.8)->company(),
            'body' => $faker->realText($maxNbChars = 200)
        ];
    }
}
