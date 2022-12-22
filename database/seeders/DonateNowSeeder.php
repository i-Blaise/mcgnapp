<?php

namespace Database\Seeders;

use App\Models\DonateNow;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DonateNowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $donatenow = [
            [
            'bg_img' => 'img/donate.jpg',
            'caption' => $faker->realText($maxNbChars = 50),
            'body' => $faker->realText($maxNbChars = 500)
            ]
        ];

        foreach($donatenow as $key => $value){
            DonateNow::create($value);
        }
    }
}
