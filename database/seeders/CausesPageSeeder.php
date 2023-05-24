<?php

namespace Database\Seeders;

use App\Models\CausesPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CausesPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                
        $causespage = [
            [
                'header_img' => 'img/page-header.jpg',
            ]
        ];

        foreach($causespage as $key => $value){
            CausesPage::create($value);
        }
    }

}
