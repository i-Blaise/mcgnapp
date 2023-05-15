<?php

namespace Database\Seeders;

use App\Models\RegistrationRefCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegistrationRefCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $about = [
            [
                'ref_code' => '302b6140c50c4f3172c4523a5498f690'
            ]
        ];

        foreach($about as $key => $value){
            RegistrationRefCode::create($value);
        }
    }
}
