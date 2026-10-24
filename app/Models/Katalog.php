<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    //
    protected $fillable = [
        "nama"
    ];

    public function produk() {
        return $this->belongsToMany(Produk::class);
    }
}
