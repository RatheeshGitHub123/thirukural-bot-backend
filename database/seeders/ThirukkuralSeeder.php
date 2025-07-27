<?php

namespace Database\Seeders;

use App\Models\Thirukkural;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThirukkuralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $path = public_path('thirukural.json');
       $json = file_get_contents($path);
       $kurals = json_decode($json, true);

        foreach ($kurals as $kural) {
            Thirukkural::create($kural['row']);
        }
        $this->command->info('Products seeded from public JSON file.');
    }
}
