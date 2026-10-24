<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
    public function get($jumlah = 0) {
        $produk = ($jumlah < 1) ? Produk::all() : Produk::take($jumlah)->get(); 
        return $produk;
    }
    public function add(Request $request) {
        $validation = $request->validate([
            "nama" => "string|min:1|required",
            "harga" => "required|min:0|numeric",
            "katalog_id" => "required|min:1|exists:katalogs,id"
        ]);

        Produk::create($validation);

        return redirect()->back()->with("success", "Produk berhasil disimpan");
    }
}
