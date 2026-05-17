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
    <nav class="mx-auto flex items-center justify-between bg-white shadow-sm py-4 px-45 font-semibold">
            <h2 class="text-2xl font-bold text-indigo-900">LokalKerja</h2>
            <ul class="flex items-center gap-4">
                <a href="#" class="text-gray-800 hover:text-gray-900 px-4 py-2 rounded-md">Cari Lowongan</a>
                <a
                    href="#"
                    class="text-gray-800   px-4 py-2 rounded-md transition-all">
                    Profile Saya
                </a>
            </ul>
    </nav>

    <main>
        {{ $slot }}
    </main>
</body>
</html>
