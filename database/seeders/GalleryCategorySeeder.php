<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GalleryCategory;
use Faker\Factory as Faker;

class GalleryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $categories = [
            [
                'category' => 'nzulenzu',
                'category_id' => $faker->randomNumber($nbDigits = 3, $strict = true),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'aflukopke',
                'category_id' => $faker->randomNumber($nbDigits = 3, $strict = true),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'christmas',
                'category_id' => $faker->randomNumber($nbDigits = 3, $strict = true),
                'created_at' => now(),
                'updated_at' => now(),
            ]
            ];

            foreach($categories as $key => $value){
                GalleryCategory::create($value);
            }
    }
}
