<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use App\Models\Produk;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home(ProdukController $produkController, KatalogController $katalogController) {
        $produk = $produkController->get(12);
        // echo $produk;
        $katalog = $katalogController->get();
        return view("home", [
            "produk" => $produk,
            "katalog" => $katalog
        ]);
    }
    public function produk($id) {
        $produk = Produk::find($id);
        return view("produk", compact("produk"));
    }
    public function produk_produk() {
        $produk = Produk::all();
        $katalog = Katalog::all();
        return view("produk_produk", [
            "produk" => $produk,
            "katalog" => $katalog
        ]);
    }
    public function keranjang() {
        return view("keranjang");
    }
    public function checkout() {
        return view("checkout");
    }
    public function login() {
        return view("login");
    }
    public function register() {
        return view("register");
    }
    public function katalog() {
        $katalog = Katalog::all();
        return view("katalog", compact("katalog"));
    }
}
