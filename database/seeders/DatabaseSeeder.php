<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\School::insert([
            ['name'=>"ST. LOUIS UNIVERSITY INSTITUTE", 'api_root'=>'https://bnb.stlouissystems.org/api', 'logo_path'=>''],
            ['name'=>"GRACIOUS UNIVERSITY", 'api_root'=>'https://gustudents.com/api', 'logo'=>''],
            ['name'=>"BIAKA UNIVERSITY INSTITUTE", 'api_root'=>'https://students.buibsystems.org/api', 'logo_path'=>''],
            ['name'=>"HIMS", 'api_root'=>'https://students.himsportal.org/api', 'logo_path'=>'']
        ]);
    }
}
