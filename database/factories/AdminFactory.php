<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AdminFactory extends Factory
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
            'name' => $faker->name($gender = null),
            'email' => $faker->optional($weight = 0.8)->freeEmail(),
            'profile_img' => $faker->imageUrl($width = 100, $height = 100),
            'description' => $faker->realText($maxNbChars = 250),
            'position' => $faker->jobTitle(),
            'password' => $faker->password(),
        ];
    }
}
