@extends("layouts.app")

@section("title", "Home")

@section("content")
<main>
    <div class="relative w-full h-[500px]">
      <!-- Gambar Background -->
      <img 
        src="{{ asset('assets/Gambar.jpg') }}" 
        alt="Koleksi Kue" 
        class="absolute inset-0 w-full h-full object-cover z-0"
      />

      <!-- Overlay -->
      <div class="absolute inset-0 bg-black/40 z-10"></div>

      <!-- Konten -->
      <div class="relative z-20 flex flex-col items-center justify-center h-full text-white">
        <h1 class="text-4xl font-bold text-shadow-primary text-white">Kelezatan Manis di Setiap Gigitan</h1>
      </div>
    </div>
    <div class="content m-5 bg-background">
        <div class="slide_produk">
            <div class="title mb-1">
                <h1 class="text-4xl font-bold">Produk Kami</h1>
            </div>
            <div class="produk flex w-full gap-2 overflow-x-auto pb-2">
                @foreach ($produk as $item)
                    <div class="barang shrink-0 w-[calc((100%-1.5rem)/4)] min-w-[250px] border-border text-center border-2 rounded-xl bg-surface p-2">
                        <img src="{{ $item->img_path }}" alt="img" class="w-full aspect-[4/3] object-cover">
                        <h1 class="text-2xl">{{ $item->nama }}</h1>
                        <h2>Harga: Rp{{ $item->harga }}</h2>
                    </div>
                    
                @endforeach
            </div>
        </div>
        <div class="title mb-1">
            <h1 class="text-4xl font-bold">Katalog Produk Kami</h1>
        </div>
        <div class="kategori-produk flex w-full gap-2 overflow-x-auto pb-2">
            @foreach ($katalog as $item)
                <div class="barang shrink-0 w-[calc((100%-1.5rem)/4)] min-w-[250px] border-border text-center border-2 rounded-xl bg-surface p-2">
                    <img src="{{ $item->img_path }}" alt="img" class="w-full aspect-[4/3] object-cover">
                    <h1 class="text-2xl">{{ $item->nama }}</h1>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection