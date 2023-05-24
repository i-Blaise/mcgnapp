<?php

namespace Database\Seeders;

use App\Models\BlogPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogpage = [
            [
                'header_img' => 'img/page-header.jpg',
            ]
        ];

        foreach($blogpage as $key => $value){
            BlogPage::create($value);
        }
    }
}
