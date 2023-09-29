<?php

namespace Database\Seeders;

use App\Models\GoldType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoldTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GoldType::factory()
                ->count(10)
                ->create();
    }
}
