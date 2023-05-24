<?php

namespace Database\Seeders;

use App\Models\EventsPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventsPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eventspage = [
            [
                'header_img' => 'img/page-header.jpg',
            ]
        ];

        foreach($eventspage as $key => $value){
            EventsPage::create($value);
        }
    }
}
