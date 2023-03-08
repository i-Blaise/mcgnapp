<?php

namespace Database\Seeders;

use App\Models\ContactUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $contact = [
            [
                'location' => $faker->streetAddress().', '.$faker->city().', '.$faker->country(),
                'phone_num1' => $faker->phoneNumber(),
                'email' => 'info@mcgn.org',
                'sm_facebook_status' => 1,
                'sm_facebook_link' => $faker->url(),
                'sm_instagram_status' => 1,
                'sm_instagram_link' => $faker->url(),
                'sm_linkedin_status' => 1,
                'sm_linkedin_link' => $faker->url(),
                'sm_twitter_status' => 1,
                'sm_twitter_link' => $faker->url(),
                'sm_youtube_status' => 1,
                'sm_youtube_link' => $faker->url(),
                'sm_snapchat_status' => 1,
                'sm_snapchat_link' => $faker->url(),
                'sm_whatsapp_status' => 1,
                'sm_whatsapp_link' => $faker->url()
            ]
        ];

        foreach($contact as $key => $value){
            ContactUs::create($value);
        }
    }
}
