<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Volunteers>
 */
class VolunteersFactory extends Factory
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
            'full_name' => $faker->name($gender = null),
            'phone_num' => $faker->e164PhoneNumber(),
            'email' => $faker->optional($weight = 0.8)->freeEmail(),
            'reason' => $faker->realText($maxNbChars = 400),
            'event_name' => $faker->realText($maxNbChars = 50),
            'admitted' => $faker->boolean($chanceOfGettingTrue = 80)
        ];
    }
}
