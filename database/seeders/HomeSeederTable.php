<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HomeSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home')->insert([
            'home_slider1' => 'img/carousel-1.jpg',
            'home_slider1_caption' => Str::random(60),
            'home_slider1_text' => Str::random(255),
            'home_slider2' => 'img/carousel-2.jpg',
            'home_slider2_caption' => Str::random(60),
            'home_slider2_text' => Str::random(255),
            'home_slider3' => 'img/carousel-3.jpg',
            'home_slider3_caption' => Str::random(60),
            'home_slider3_text' => Str::random(255),
            'video_link' => 'https://www.youtube.com/watch?v=2mqsVzgsV_c&list=PLN4ZYs0zvvGngkRZyAQhg-nYuXOfD6HMF&index=3&t=15017s'
        ]);
    }
}
