<?php

namespace Database\Seeders;

use App\Models\User;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Adding a super admin user for the purpose of testing all modules
        User::factory()->create([
            'name' => 'Testing', 
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);

        User::factory()->create([
            'name' => 'Public User',
            'email' => 'user@example.com',
        ]);

        User::factory()->create([
            'name' => 'Pawnshop Owner',
            'email' => 'pawnshop@example.com',
        ]);

    }
}
