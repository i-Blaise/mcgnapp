<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TeamFactory extends Factory
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
            'team_img' => $faker->imageUrl($width = 300, $height = 400),
            'name' => $faker->name($gender = null),
            'position' => $faker->jobTitle(),
            'linkedin' => $faker->optional($weight = 0.7)->url(),
            'facebook' => $faker->optional($weight = 0.7)->url(),
            'instagram' => $faker->optional($weight = 0.7)->url(),
            'twitter' => $faker->optional($weight = 0.7)->url(),
        ];
    }
}
