<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = [
        "nama",
        "harga",
        "katalog_id",
        "deskripsi",
    ];
    //

    public function katalog() {
        return $this->belongsTo(Katalog::class);
    }

    public function order() {
        return $this->belongsToMany(Produk::class);
    }
    public function keranjang() {
        return $this->belongsToMany(Keranjang::class);
    }
}
