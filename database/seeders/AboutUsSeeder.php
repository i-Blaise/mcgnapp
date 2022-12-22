<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $about = [
            [
                'aboutus_caption' => $faker->realText($maxNbChars = 50),
                'about' => $faker->realText($maxNbChars = 1000),
                'mission' => $faker->realText($maxNbChars = 1000),
                'vision' => $faker->realText($maxNbChars = 1000),
                'header_img' => 'img/page-header.jpg',
                'aboutus_desc_img' => 'img/about.jpg'
            ]
        ];

        foreach($about as $key => $value){
            AboutUs::create($value);
        }
    }
}
