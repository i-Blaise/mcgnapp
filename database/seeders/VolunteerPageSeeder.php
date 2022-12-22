<?php

namespace Database\Seeders;

use App\Models\VolunteerPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class VolunteerPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $volunteerpage = [
            [
                'bg_img' => 'img/volunteer.jpg',
                'caption' => $faker->realText($maxNbChars = 50),
                'body' =>$faker->realText($maxNbChars = 500)
            ]
        ];

        foreach($volunteerpage as $key => $value){
            VolunteerPage::create($value);
        }
    }
}
