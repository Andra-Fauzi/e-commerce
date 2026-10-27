<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-background text-foreground border-border min-h-screen flex flex-col">
    <nav class="w-full border-b-2 border-black p-4 lg:p-5">
        <div class="flex flex-wrap items-center justify-between gap-3 lg:flex-nowrap">

            {{-- Kiri: logo + navigasi (navigasi hanya tampil di desktop) --}}
            <div class="left-item flex items-center gap-6">
                <a href="/" class="logo border-border bg-accent rounded-2xl p-2 px-5">
                    <h1 class="text-3xl lg:text-4xl text-foreground">KUE</h1>
                </a>
                <div class="navigation hidden lg:flex gap-5">
                    <a href="/produk_produk">Produk</a>
                    <a href="/katalog">Katalog</a>
                </div>
            </div>

            {{-- Tombol hamburger (hanya mobile/tablet) --}}
            <button id="menu-btn" type="button" aria-label="Buka menu" aria-expanded="false"
                    class="lg:hidden border-2 border-border rounded-xl p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            {{-- Search: baris sendiri di mobile, di tengah pada desktop --}}
            <div class="searchBar order-last w-full lg:order-none lg:w-2/4 flex border-border border-2 rounded-2xl p-2">
                <form action="/produk_produk" method="get" class="flex w-full gap-2">
                    <input type="text" placeholder="Kue kering, Timpan, Croissant" name="search" id="search"
                           class="w-full min-w-0 bg-transparent outline-none px-2">
                    <input class="bg-accent px-3 py-1 rounded-2xl cursor-pointer" type="submit" value="search">
                </form>
            </div>

            {{-- User (desktop) --}}
            <div class="user hidden lg:flex items-center gap-4 p-2">
                @if (Auth::check())
                    <a href="#">{{ auth()->user()->name }}</a>
                    <a href="/keranjang"><img src="{{ asset('assets/shopping_cart.svg') }}" alt="Keranjang" class="w-6 h-6"></a>
                @else
                    <a href="/login">LOGIN</a>
                    <a href="/register">REGISTER</a>
                @endif
            </div>
        </div>

        {{-- Menu mobile (dibuka lewat hamburger) --}}
        <div id="mobile-menu" class="hidden lg:hidden">
            <div class="flex flex-col gap-3 pt-4 mt-4 border-t border-border">
                <a href="/produk_produk">Produk</a>
                <a href="#">Katalog</a>
                @if (Auth::check())
                    <a href="#">{{ auth()->user()->name }}</a>
                    <a href="/keranjang" class="flex items-center gap-2">
                        <img src="{{ asset('assets/shopping_cart.svg') }}" alt="" class="w-6 h-6"> Keranjang
                    </a>
                @else
                    <a href="/login">LOGIN</a>
                    <a href="/register">REGISTER</a>
                @endif
            </div>
        </div>
    </nav>

    <div class="flex-1">
        @yield("content")
    </div>

    <footer class="text-center p-4 border-t-2 border-border">
        &copy; {{ date('Y') }} KUE. Hak cipta dilindungi.
    </footer>

    <script>
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('mobile-menu');
        btn.addEventListener('click', () => {
            const open = menu.classList.toggle('hidden') === false;
            btn.setAttribute('aria-expanded', open);
        });
    </script>
</body>
</html>