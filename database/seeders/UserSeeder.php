<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([

          'name'=>'Abdallah',
          'email'=>'abdalhman58@gmail.com',
          'password'=>Hash::make('12345678'),
          'type'=>'admin',
          
        ]);
        User::create([

          'name'=>'ahmed ali',
          'email'=>'Dr-ahmed@gmail.com',
          'password'=>Hash::make('12345678'),
          'type'=>'doctor',
        ]);
        User::create([

          'name'=>'ahmed mohamed',
          'email'=>'ahmedali@gmail.com',
          'password'=>Hash::make('12345678'),
        ]);
    }
}
