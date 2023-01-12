<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Blog;
use App\Models\Causes;
use App\Models\ContactPage;
use App\Models\DonateNow;
use App\Models\Event;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\VolunteerPage;
use App\Models\Volunteers;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call(ContactPage::class); 

        Admin::factory(5)->create();
    }
}
