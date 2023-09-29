<?php

namespace Database\Seeders;

use App\Models\Pawnshop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PawnshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pawnshop::factory()
                    ->count(10)
                    ->create();        
    }
}
