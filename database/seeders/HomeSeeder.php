<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $homeData = [
            [
                'home_slider_img' => 'img/carousel-1.jpg',
                'home_slider_caption' => $faker->realText($maxNbChars = 50),
                'home_slider_text' => $faker->realText($maxNbChars = 150),
                'video_link' => 'https://www.youtube.com/watch?v=2mqsVzgsV_c&list=PLN4ZYs0zvvGngkRZyAQhg-nYuXOfD6HMF&index=3&t=15017s',
                'donation_cause' => $faker->randomDigitNotZero()
            ],
            [
                'home_slider_img' => 'img/carousel-2.jpg',
                'home_slider_caption' => $faker->realText($maxNbChars = 50),
                'home_slider_text' => $faker->realText($maxNbChars = 150),
                'video_link' => 'https://www.youtube.com/watch?v=2mqsVzgsV_c&list=PLN4ZYs0zvvGngkRZyAQhg-nYuXOfD6HMF&index=3&t=15017s',
                'donation_cause' => $faker->randomDigitNotZero()
            ],
            [
                'home_slider_img' => 'img/carousel-3.jpg',
                'home_slider_caption' => $faker->realText($maxNbChars = 50),
                'home_slider_text' => $faker->realText($maxNbChars = 150),
                'video_link' => 'https://www.youtube.com/watch?v=2mqsVzgsV_c&list=PLN4ZYs0zvvGngkRZyAQhg-nYuXOfD6HMF&index=3&t=15017s',
                'donation_cause' => $faker->randomDigitNotZero()
            ]
        ];

        foreach($homeData as $key => $value){
            Home::create($value);
        }
    }
}
