<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-background text-foreground border-border">
    <nav class="flex p-5 w-full justify-between border-b-2 border-black">
        <div class="logo ml-4 border-border bg-accent rounded-2xl p-2 px-5">
            <h1 class="text-4xl text-foreground">KUE</h1>
        </div>
        <div class="searchBar flex border-border border-2 rounded-2xl p-2 w-2/4">
            <form action="keranjang" method="get" class="flex w-full">
                <input type="text" placeholder="Kue kering, Timpan, Croissant" name="search" id="search" class="w-full">
                <input class="bg-accent p-1 rounded-2xl" type="submit" value="search">
            </form>
        </div>
        <div class="user flex justify-between">
            @if (Auth::check())
                <a href="#" class="mr-2 mt-3 ml-4">{{ auth()->user() }}</a>
            @else
                <a href="/login" class="mr-2 mt-3 ml-4">LOGIN</a>
                <a href="/register" class="mr-2 mt-3 ml-4">REGISTER</a>
            @endif
        </div>
    </nav>
    @yield("content")
    <footer class="text-center p-4 border-t-2 border-border">
        &copy; {{ date('Y') }} KUE. Hak cipta dilindungi.
    </footer>
</body>
</html>