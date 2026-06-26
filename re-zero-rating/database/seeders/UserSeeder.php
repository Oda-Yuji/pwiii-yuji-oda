<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    // database/seeders/UserSeeder.php
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Yuji',
            'email' => 'yujioda1703@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
