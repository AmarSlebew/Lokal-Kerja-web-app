<x-auth-layout title="Company Dashboard">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow">
            <h1 class="text-2xl font-bold">Dashboard Perusahaan</h1>
            <p class="text-gray-600">Halo, {{ auth()->user()->name }} — ini adalah dashboard perusahaan sederhana.</p>
        </div>
    </div>
</x-auth-layout>
<div>
    ini akan menampilkan dashboard perusahaan
</div>
