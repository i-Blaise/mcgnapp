<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BlogFactory extends Factory
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
            'blog_img' => $faker->imageUrl($width = 800, $height = 500),
            'preview_img' => $faker->optional($weight = 0.9)->imageUrl($width = 400, $height = 300),
            'caption' => $faker->realText($maxNbChars = 50),
            'excerpt' => $faker->realText($maxNbChars = 200),
            'body' => $faker->realText($maxNbChars = 5000),
            'author_name' => $faker->name($gender = null),
            'author_excerpt' => $faker->realText($maxNbChars = 250),
        ];
    }
}
