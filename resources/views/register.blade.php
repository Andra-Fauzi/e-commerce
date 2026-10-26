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

        <form action="/register" method="post" class="flex flex-col">
            @csrf

            <input type="email" name="email" id="email" required
                   placeholder="Alamat email"
                   class="w-full h-16 border border-border rounded-lg px-5 text-lg mb-6 bg-transparent outline-none">

            <input type="nama" name="nama" id="nama" required
                   placeholder="Username"
                   class="w-full h-16 border border-border rounded-lg px-5 text-lg mb-6 bg-transparent outline-none">

            <input type="password" name="password" id="password" required
                   placeholder="Password"
                   class="w-full h-16 border border-border rounded-lg px-5 text-lg bg-transparent outline-none">

            <div class="flex justify-between items-center mt-4 mb-12">
            </div>

            <button type="submit"
                    class="w-full h-16 bg-accent text-black text-lg rounded-lg cursor-pointer">
                Register
            </button>
        </form>

        <p class="text-center mt-6 opacity-70">
            Sudah Punya Akun?
            <a href="/register" class="underline">Login</a>
        </p>
    </div>
</body>
</html>