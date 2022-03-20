<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  // we are importing this to save data in database via seeder
use Illuminate\Support\Facades\Hash; // we are importing this to generate Hash code of our password

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
            'name'=>'Rishabh',
            'email'=>'trapt00@gmail.com',
            'password'=>Hash::make('123')
        ],

        [
            'name'=>'Rohit',
            'email'=>'rohit@gmail.com',
            'password'=>Hash::make('1111')
        ]
    
    ]);
    // we are storing  mutiple info in data base by putting info in form of 2D array
    }
}
