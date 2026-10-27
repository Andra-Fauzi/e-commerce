@extends("layouts.app")

@section("title", "Katalog")

@section("content")
<div class="produk grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-2 m-5">
    @foreach ($katalog as $item)
        <a href="#" class="barang border-border text-center border-2 rounded-xl bg-surface p-2">
            <img src="{{ asset($item->img_path) }}" alt="img" class="w-full aspect-[4/3] object-cover">
            <h1 class="text-2xl">{{ $item->nama }}</h1>
            {{-- <h2>Harga: Rp{{ $item->harga }}</h2> --}}
        </a>
    @endforeach
</div>
@endsection