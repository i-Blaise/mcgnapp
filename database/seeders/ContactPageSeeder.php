<?php

namespace Database\Seeders;

use App\Models\ContactPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ContactPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $contactpage = [
            [
                'header_img' => 'img/page-header.jpg',
                'form_img' => 'img/contact.jpg',
                'caption' => $faker->realText($maxNbChars = 50)
            ]
        ];

        foreach($contactpage as $key => $value){
            ContactPage::create($value);
        }
    }
}
