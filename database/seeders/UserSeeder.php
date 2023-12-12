<?php

namespace Database\Seeders;

use App\Models\User;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => bcrypt('password2'),
            'role' => 'user',
        ]);

        User::factory()->create([
            'name' => 'Pawnshop',
            'email' => 'pawnshop@example.com',
            'password' => bcrypt('password3'),
            'role' => 'pawnshop',
        ]);
    }
}
