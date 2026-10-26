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
            "nama" => "Kue Basah",
            "img_path" => "assets/kue_basah.jpg",
        ]);
        Katalog::create([
            "nama" => "Kue Kering",
            "img_path" => "assets/kue_kering.jpg",
        ]);
        Katalog::create([
            "nama" => "Pastry",
            "img_path" => "assets/pastry.jpg",
        ]);
        Katalog::create([
            "nama" => "Bolu",
            "img_path" => "assets/bolu.jpg",
        ]);
    }
}
