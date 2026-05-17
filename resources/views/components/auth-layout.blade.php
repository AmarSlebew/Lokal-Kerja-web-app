@props([
    'title',
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>
<body>
    <nav class="flex justify-between px-20 bg-white drop-shadow-2xl p-5">
        <h2 class="text-primary font-bold text-xl">Lokal Kerja</h2>
        <ul class="list-none flex gap-3 font-semibold text-gray-500 ">
            <li><a href="/">Cari Lowongan</a></li>
            <li><a href="/">Login</a></li>
            <li><a href="/">Daftar</a></li>
        </ul>
    </nav>
    <main>
        {{ $slot }}
    </main>
</body>
</html>
