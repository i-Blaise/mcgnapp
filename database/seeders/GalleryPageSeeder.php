<?php

namespace Database\Seeders;

use App\Models\GalleryPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GalleryPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gallerypage = [
            [
                'header_img' => 'img/page-header.jpg',
            ]
        ];

        foreach($gallerypage as $key => $value){
            GalleryPage::create($value);
        }
    }
}
