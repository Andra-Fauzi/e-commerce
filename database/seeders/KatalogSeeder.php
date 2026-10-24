<?php

namespace Database\Seeders;

use App\Models\Katalog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Katalog::create([
            "nama" => "Kue Basah"
        ]);
        Katalog::create([
            "nama" => "Kue Kering"
        ]);
        Katalog::create([
            "nama" => "Pastry"
        ]);
        Katalog::create([
            "nama" => "Bolu"
        ]);
    }
}
