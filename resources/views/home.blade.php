@extends("layouts.app")

@section("title", "Home")

@section("content")
<main>
    <div class="caraousel">
        <img src="assets/kue.jpg" alt="kue" width="300" height="600">
    </div>
    <div class="slide_produk">
        INI SLIDE PRODUK
        @foreach ($produk as $item)
            <h2>{{ $item->nama }}</h2>
            <p>Harga: Rp{{ $item->harga }}</p>
        @endforeach
    </div>
    <div class="kategori-produk">
        INI BAKAL ADA KOTAK KOTAK YANG ADA TULISAN KATEGORI BESERTA GAMBAR
    </div>
</main>
<footer>
    copyright gitulah
</footer>
@endsection