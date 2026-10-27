<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-background text-foreground border-border flex justify-center items-center w-full min-h-screen">
    <div class="login-content w-full max-w-[670px] mx-4 border rounded-xl bg-surface px-12 py-14">
        <p class="text-lg opacity-60">Silakan masukkan data kamu</p>
        <h1 class="text-5xl font-bold mt-2 mb-14">Selamat datang</h1>

        <form action="/login" method="post" class="flex flex-col">
            @csrf

            <input type="email" name="email" id="email" required
                   placeholder="Alamat email"
                   class="w-full h-16 border border-border rounded-lg px-5 text-lg mb-6 bg-transparent outline-none">

            <input type="password" name="password" id="password" required
                   placeholder="Password"
                   class="w-full h-16 border border-border rounded-lg px-5 text-lg bg-transparent outline-none">
            @error('email')
                <p class="text-red-600 mb-3">{{ $message }}</p>
            @enderror
            <div class="flex justify-between items-center mt-4 mb-12">
                <label for="remember" class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="remember" id="remember" class="w-5 h-5">
                    Ingat saya 30 hari
                </label>
                <a href="#" class="underline">Lupa password?</a>
            </div>

            <button type="submit"
                    class="w-full h-16 bg-accent text-black text-lg rounded-lg cursor-pointer">
                Login
            </button>
        </form>

        <p class="text-center mt-6 opacity-70">
            Belum punya akun?
            <a href="/register" class="underline">Daftar</a>
        </p>
    </div>
</body>
</html>