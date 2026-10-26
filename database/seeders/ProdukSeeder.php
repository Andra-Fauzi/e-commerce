<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Produk::create([
            "nama" => "Timpan",
            "harga" => "2000",
            "katalog_id" => 1,
            "deskripsi" => "Kue khas aceh",
            "img_path" => "assets/timpan.jpg",
        ]);
        Produk::create([
            "nama" => "Kukis",
            "harga" => "2000",
            "katalog_id" => 2,
            "deskripsi" => "Kue menggunakan coklat dan margarin",
            "img_path" => "assets/kukis.jpg",
        ]);
        Produk::create([
            "nama" => "Croissant",
            "harga" => "10000",
            "katalog_id" => 3,
            "deskripsi" => "Kue menggunakan coklat dan margarin",
            "img_path" => "assets/croissant.jpg",
        ]);
        Produk::create([
            "nama" => "Black Forest",
            "harga" => "120000",
            "katalog_id" => 4,
            "deskripsi" => "Bolu dengan coklat black forest",
            "img_path" => "assets/black_forest.jpg",
        ]);
    }
}
