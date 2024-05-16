<?php

namespace Database\Seeders;

use App\Models\Etiquette;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EtiquetteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Etiquette::factory()->count(10)->create();
    }
}
