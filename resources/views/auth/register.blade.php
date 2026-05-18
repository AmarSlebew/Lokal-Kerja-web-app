<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - LokalKerja</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        function switchRole(role) {
            document.getElementById('role_input').value = role;
            
            // Update tab styling
            const tabs = document.querySelectorAll('[data-role-tab]');
            tabs.forEach(tab => {
                if (tab.getAttribute('data-role-tab') === role) {
                    tab.classList.remove('text-gray-500', 'border-transparent');
                    tab.classList.add('text-indigo-900', 'border-b-2', 'border-indigo-900', 'font-semibold');
                } else {
                    tab.classList.remove('text-indigo-900', 'border-b-2', 'border-indigo-900', 'font-semibold');
                    tab.classList.add('text-gray-500', 'border-transparent');
                }
            });
        }
    </script>
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen">
    <!-- Header -->
    <header class="bg-white shadow-sm py-4 px-6">
        <div class="max-w-6xl mx-auto flex items-center justify-between">
            <div class="text-2xl font-bold text-indigo-900">LokalKerja</div>
            <nav class="flex items-center gap-4">
                <a href="#" class="text-gray-700 hover:text-gray-900">Cari Lowongan</a>
                <a href="{{ route('auth.login') }}" class="text-gray-700 hover:text-gray-900">Login</a>
                <a href="{{ route('auth.register') }}" class="bg-indigo-900 text-white px-6 py-2 rounded-md hover:bg-indigo-800">Daftar</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <div class="flex items-center justify-center py-12 px-4">
        <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
            
            <!-- Title Section -->
            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold text-gray-900 mb-2">Daftar Akun Baru</h1>
                <p class="text-gray-600 text-sm">Bergabunglah dengan ribuan profesional di Indonesia.</p>
            </div>

            <!-- Tabs -->
            <div class="flex border-b border-gray-200 mb-6">
                <button 
                    onclick="switchRole('job_seeker')"
                    data-role-tab="job_seeker"
                    class="flex-1 py-3 text-center text-indigo-900 border-b-2 border-indigo-900 font-semibold transition">
                    📋 Pencari Kerja
                </button>
                <button 
                    onclick="switchRole('company')"
                    data-role-tab="company"
                    class="flex-1 py-3 text-center text-gray-500 border-transparent transition">
                    🏢 Perusahaan
                </button>
            </div>

            <!-- Registration Form -->
            <form action="{{ route('auth.store') }}" method="POST" class="space-y-4">
                @csrf
                
                <!-- Hidden Role Input -->
                <input type="hidden" id="role_input" name="role" value="job_seeker">

                <!-- Full Name -->
                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-2">Nama Lengkap</label>
                    <input 
                        type="text" 
                        name="name" 
                        placeholder="Masukkan nama lengkap Anda"
                        value="{{ old('name') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 @error('name') border-red-500 @enderror"
                        required>
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-2">Email</label>
                    <input 
                        type="email" 
                        name="email" 
                        placeholder="contoh@email.com"
                        value="{{ old('email') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 @error('email') border-red-500 @enderror"
                        required>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Row -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-2">Kata Sandi</label>
                        <input 
                            type="password" 
                            name="password" 
                            placeholder="••••••••"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 @error('password') border-red-500 @enderror"
                            required>
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-2">Konfirmasi</label>
                        <input 
                            type="password" 
                            name="confirm_password" 
                            placeholder="••••••••"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 @error('confirm_password') border-red-500 @enderror"
                            required>
                        @error('confirm_password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Terms Checkbox -->
                <div class="flex items-start gap-2 mt-4">
                    <input 
                        type="checkbox" 
                        id="agree_terms"
                        name="agree_terms"
                        class="mt-1 w-4 h-4 text-indigo-600 rounded focus:ring-indigo-500"
                        required>
                    <label for="agree_terms" class="text-gray-600 text-xs">
                        Saya setuju dengan <a href="#" class="text-indigo-600 hover:underline">Syarat & Ketentuan</a> serta <a href="#" class="text-indigo-600 hover:underline">Kebijakan Privasi</a>
                    </label>
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit"
                    class="w-full bg-indigo-900 text-white font-semibold py-3 rounded-md hover:bg-indigo-800 transition mt-6">
                    Daftar Sekarang
                </button>

                <!-- Divider -->
                <div class="flex items-center gap-4 my-4">
                    <div class="flex-1 border-t border-gray-300"></div>
                    <span class="text-gray-500 text-xs">Atau daftar dengan</span>
                    <div class="flex-1 border-t border-gray-300"></div>
                </div>

                <!-- Google Sign Up -->
                <button 
                    type="button"
                    class="w-full border border-gray-300 text-gray-700 font-medium py-2 rounded-md hover:bg-gray-50 transition flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" viewBox="0 0 24 24">
                        <text x="5" y="18" font-size="16" fill="currentColor">G</text>
                    </svg>
                    Google
                </button>
            </form>

            <!-- Login Link -->
            <p class="text-center text-gray-600 text-sm mt-6">
                Sudah punya akun? <a href="{{ route('auth.login') }}" class="text-indigo-600 hover:underline font-semibold">Login</a>
            </p>

        </div>
    </div>
</body>
</html>
