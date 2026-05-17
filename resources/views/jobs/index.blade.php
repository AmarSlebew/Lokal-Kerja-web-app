<x-job-layout title="Jobs">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow">
            <h1 class="text-2xl font-bold">Halaman Lowongan (Pencari Kerja)</h1>
            <p class="text-gray-600">Halo, {{ auth()->user()->name }} — ini adalah halaman lowongan sederhana.</p>
        </div>
    </div>
</x-job-layout>
<div>
    ini akan menampilkan job yang tersedia
</div>
