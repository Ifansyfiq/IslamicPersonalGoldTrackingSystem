<?php

namespace Database\Seeders;

use App\Models\SafeKeepRate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SafeKeepRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SafeKeepRate::factory()
                ->count(10)
                ->create();
    }
}
