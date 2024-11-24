<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Correct namespace for DB
use Illuminate\Support\Facades\Hash; // Correct namespace for Hash

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'manjunath',
            'email' => 'manjunath@gmail.com',
            'password' => Hash::make('12345'),
        ]);
    }
}
