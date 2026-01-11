<?php

namespace Database\Seeders;

use App\Models\Affiliations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AffiliationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Affiliations::factory()->count(10)->create();
    }
}
