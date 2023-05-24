<?php

namespace Database\Seeders;

use App\Models\AboutUsPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $aboutpage = [
            [
                'header_img' => 'img/page-header.jpg',
            ]
        ];

        foreach($aboutpage as $key => $value){
            AboutUsPage::create($value);
        }
    }
}
