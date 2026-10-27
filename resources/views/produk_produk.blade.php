@extends("layouts.app")

@section("title", "Produk-Produk")

@section("content")
<main class="flex justify-between">
    <div class="filters m-5 border-2 rounded-xl p-5">
        <form action="/produk_produk" method="get">
            <input type="text" name="search" id="search" placeholder="Cari produk">
            <label for="katalog">Pilih Katalog:</label>
            <select id="katalog" name="katalog">
                <option value="">-- Pilih --</option>
                @foreach ($katalog as $item)
                <option value="{{ $item->nama }}">{{ $item->nama }}</option>                
                @endforeach
            </select>
        </form>
    </div>
    <div class="produk grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 m-5">
        @foreach ($produk as $item)
            <a href="/produk/{{ $item->id }}" class="barang border-border text-center border-2 rounded-xl bg-surface p-2">
                <img src="{{ asset($item->img_path) }}" alt="img" class="w-full aspect-[4/3] object-cover">
                <h1 class="text-2xl">{{ $item->nama }}</h1>
                <h2>Harga: Rp{{ $item->harga }}</h2>
            </a>
        @endforeach
    </div>
</main>
@endsection