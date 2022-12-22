<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Causes;
use App\Models\ContactPage;
use App\Models\DonateNow;
use App\Models\Event;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\VolunteerPage;
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

        $this->call(ContactPage::class); 

        // Blog::factory(10)->create();
    }
}
