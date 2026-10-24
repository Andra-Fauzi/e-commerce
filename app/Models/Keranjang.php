<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    //
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function produk() {
        return $this->belongsToMany(Produk::class);
    }
}
