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
        GoldType::create(['gold_type' => 'Gold Bar']);
        GoldType::create(['gold_type' => 'Dinar']);
        GoldType::create(['gold_type' => 'Jewellery']);
        GoldType::create(['gold_type' => 'Others']);
    }
}
