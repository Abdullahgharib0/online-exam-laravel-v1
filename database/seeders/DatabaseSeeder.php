<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Subject::factory(10)->create();




        // create seeder default admin & doctor and student 3 user password default (12345678)
        $this->call([

            UserSeeder::class,
            SubjectSeeder::class,
        ]);


    }
}
