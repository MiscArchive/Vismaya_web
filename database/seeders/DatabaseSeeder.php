<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'ADMIN',
            'email' => 'admin@vismaya.com',
            'role' => 'admin',
            'password' => bcrypt('12345678'),
        ]);
    }
}
