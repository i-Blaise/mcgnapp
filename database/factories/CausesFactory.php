<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CausesFactory extends Factory
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
            'main_img' => $faker->imageUrl($width = 800, $height = 500),
            'caption' => $faker->realText($maxNbChars = 50),
            'excerpt' => $faker->realText($maxNbChars = 120),
            'body' => $faker->realText($maxNbChars = 4000),
            // 'goal' => $faker->randomFloat($nbMaxDecimals = 2, $min =500, $max = 5000),
            'goal' => 5000,
            'money_raised' => $faker->optional($weight = 0.7)->randomFloat($nbMaxDecimals = 2, $min =500, $max = 5000)
        ];
    }
}
