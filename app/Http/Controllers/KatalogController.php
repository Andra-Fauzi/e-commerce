<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    //
    public function get($jumlah = 0) {
        $katalog = ($jumlah < 1) ? Katalog::all() : Katalog::take($jumlah)->get(); 
        return $katalog;
    }
}
