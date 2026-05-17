<x-job-layout title="Profil Saya">
    @php
        $user = auth()->user();
        $profile = $profile ?? null;
    @endphp

    <div class="min-h-screen bg-slate-50 px-4 py-8 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-300">
            <div class="flex items-start justify-between gap-4 pb-6">
                <div>
                    <h1 class="text-3xl font-bold text-slate-950">Profil Saya</h1>
                    <p class="mt-2 text-sm text-slate-500">Perbarui informasi akun dan data profil Anda.</p>
                </div>
                <button id="saveButton" type="submit" form="profileForm" disabled class="inline-flex items-center rounded-2xl bg-slate-300 px-6 py-3 text-sm font-semibold text-slate-500 shadow-sm transition">
                    Simpan Perubahan
                </button>
            </div>

            <div class="grid gap-6 lg:grid-cols-[2fr_1fr]">
                <div class="space-y-6">
                    <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="mb-6 flex items-center gap-3 border-b border-slate-200 pb-4">
                            <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-slate-100 text-slate-950">
                                <x-lucide-user class="h-5 w-5" />
                            </div>
                            <div>
                                <h2 class="text-xl font-semibold text-slate-950">Informasi Pribadi</h2>
                                <p class="text-sm text-slate-500">Lengkapi data dasar profil Anda.</p>
                            </div>
                        </div>

                        <form id="profileForm" action="{{ route('profile.store') }}" method="POST" class="space-y-6">
                            @csrf
                            <div class="grid gap-4 md:grid-cols-2">
                                <label class="block text-sm text-slate-600">
                                    Nama Lengkap
                                    <input id="nameInput" type="text" name="name" value="{{ old('name', $user->name) }}" class="mt-2 w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 outline-none focus:border-slate-400 focus:ring-1 focus:ring-slate-300" />
                                </label>
                                <label class="block text-sm text-slate-600">
                                    Email
                                    <input id="emailInput" type="email" name="email" value="{{ old('email', $user->email) }}" class="mt-2 w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 outline-none focus:border-slate-400 focus:ring-1 focus:ring-slate-300" />
                                </label>
                            </div>

                            <div class="grid gap-4 md:grid-cols-2">
                                <label class="block text-sm text-slate-600">
                                    Nomor Telepon
                                    <input id="phoneInput" type="tel" name="phone" value="{{ old('phone', $profile->phone ?? '') }}" class="mt-2 w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 outline-none focus:border-slate-400 focus:ring-1 focus:ring-slate-300" />
                                </label>
                                <label class="block text-sm text-slate-600">
                                    Alamat
                                    <input id="alamatInput" type="text" name="alamat" value="{{ old('alamat', $profile->alamat ?? '') }}" class="mt-2 w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 outline-none focus:border-slate-400 focus:ring-1 focus:ring-slate-300" />
                                </label>
                            </div>

                            <label class="block text-sm text-slate-600">
                                Tentang Saya
                                <textarea id="bioInput" name="bio" rows="5" class="mt-2 w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 outline-none focus:border-slate-400 focus:ring-1 focus:ring-slate-300" placeholder="Ceritakan singkat tentang pengalaman dan keahlian Anda...">{{ old('bio', $profile->bio ?? '') }}</textarea>
                            </label>
                        </form>
                    </section>

                    <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="mb-6 flex items-center justify-between gap-3 border-b border-slate-200 pb-4">
                            <div class="flex items-center gap-3">
                                <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-slate-100 text-slate-950">
                                    <x-lucide-briefcase class="h-5 w-5" />
                                </div>
                                <div>
                                    <h2 class="text-xl font-semibold text-slate-950">Pengalaman Kerja</h2>
                                    <p class="text-sm text-slate-500">Kelola riwayat kerja Anda.</p>
                                </div>
                            </div>
                            <button class="inline-flex items-center gap-2 rounded-2xl border border-slate-200 bg-slate-50 px-4 py-2 text-sm font-semibold text-slate-950 transition hover:bg-slate-100">
                                <x-lucide-plus class="h-4 w-4" /> Tambah
                            </button>
                        </div>

                        <div class="space-y-4">
                            <article class="rounded-3xl border border-slate-200 bg-slate-50 p-4">
                                <div class="flex items-start justify-between gap-4">
                                    <div class="flex items-start gap-4">
                                        <div class="flex h-12 w-12 items-center justify-center rounded-3xl bg-white text-slate-950 shadow-sm">
                                            <x-lucide-briefcase class="h-5 w-5" />
                                        </div>
                                        <div>
                                            <h3 class="text-base font-semibold text-slate-950">Senior Product Manager</h3>
                                            <p class="text-sm text-slate-500">Tech Indo Solusindo</p>
                                            <p class="mt-2 text-xs text-slate-400">Jan 2021 - Sekarang</p>
                                        </div>
                                    </div>
                                    <button class="inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-white text-slate-500 transition hover:bg-slate-100 hover:text-slate-900">
                                        <x-lucide-pencil class="h-4 w-4" />
                                    </button>
                                </div>
                            </article>

                            <article class="rounded-3xl border border-slate-200 bg-slate-50 p-4">
                                <div class="flex items-start justify-between gap-4">
                                    <div class="flex items-start gap-4">
                                        <div class="flex h-12 w-12 items-center justify-center rounded-3xl bg-white text-slate-950 shadow-sm">
                                            <x-lucide-briefcase class="h-5 w-5" />
                                        </div>
                                        <div>
                                            <h3 class="text-base font-semibold text-slate-950">Junior Analyst</h3>
                                            <p class="text-sm text-slate-500">Data Nusantara Corp</p>
                                            <p class="mt-2 text-xs text-slate-400">Jun 2018 - Des 2020</p>
                                        </div>
                                    </div>
                                    <button class="inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-white text-slate-500 transition hover:bg-slate-100 hover:text-slate-900">
                                        <x-lucide-pencil class="h-4 w-4" />
                                    </button>
                                </div>
                            </article>
                        </div>
                    </section>
                </div>

                <div class="space-y-6">
                    <section class="rounded-3xl border border-slate-200 bg-slate-50 p-6 shadow-sm">
                        <div class="mb-6 flex items-start gap-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white text-slate-950 shadow-sm">
                                <x-lucide-rocket class="h-5 w-5" />
                            </div>
                            <div>
                                <h2 class="text-lg font-semibold text-slate-950">Optimasi CV AI</h2>
                                <p class="mt-1 text-sm text-slate-500">Pastikan informasi akurat untuk hasil CV profesional.</p>
                            </div>
                        </div>
                        <button class="inline-flex w-full items-center justify-center gap-2 rounded-2xl bg-primary px-4 py-3 text-sm font-semibold text-white transition hover:bg-slate-800">
                            <x-lucide-rocket class="h-4 w-4" /> Generate CV dengan AI
                        </button>
                    </section>

                    <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="mb-6 flex items-center justify-between gap-4 border-b border-slate-200 pb-4">
                            <div class="flex items-center gap-3">
                                <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-slate-100 text-slate-950">
                                    <x-lucide-school class="h-5 w-5" />
                                </div>
                                <div>
                                    <h2 class="text-xl font-semibold text-slate-950">Pendidikan</h2>
                                </div>
                            </div>
                            <button class="inline-flex items-center gap-2 rounded-2xl border border-slate-200 bg-slate-50 px-3 py-2 text-sm font-semibold text-slate-950 transition hover:bg-slate-100">
                                <x-lucide-plus class="h-4 w-4" />
                            </button>
                        </div>
                        <div class="rounded-3xl border border-slate-200 bg-slate-50 p-4">
                            <div class="flex items-start gap-4">
                                <div class="flex h-10 w-10 items-center justify-center rounded-3xl bg-white text-slate-950 shadow-sm">
                                    <x-lucide-school class="h-5 w-5" />
                                </div>
                                <div class="min-w-0">
                                    <h3 class="text-sm font-semibold text-slate-950">Universitas Indonesia</h3>
                                    <p class="mt-1 text-sm text-slate-500">S1 Teknik Informatika</p>
                                    <p class="mt-2 text-xs text-slate-400">2014 - 2018</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="mb-6 flex items-center gap-3 border-b border-slate-200 pb-4">
                            <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-slate-100 text-slate-950">
                                <x-lucide-terminal class="h-5 w-5" />
                            </div>
                            <div>
                                <h2 class="text-xl font-semibold text-slate-950">Keahlian</h2>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 text-sm text-slate-700">
                            <span class="inline-flex items-center gap-2 rounded-2xl border border-slate-200 bg-slate-50 px-3 py-2">
                                Product Mgmt
                                <button class="transition hover:text-rose-600"><x-lucide-x class="h-4 w-4" /></button>
                            </span>
                            <span class="inline-flex items-center gap-2 rounded-2xl border border-slate-200 bg-slate-50 px-3 py-2">
                                Data Analysis
                                <button class="transition hover:text-rose-600"><x-lucide-x class="h-4 w-4" /></button>
                            </span>
                            <span class="inline-flex items-center gap-2 rounded-2xl border border-slate-200 bg-slate-50 px-3 py-2">
                                UI/UX
                                <button class="transition hover:text-rose-600"><x-lucide-x class="h-4 w-4" /></button>
                            </span>
                        </div>
                        <div class="mt-6 relative">
                            <input type="text" placeholder="Tambah keahlian..." class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 outline-none focus:border-slate-400 focus:ring-1 focus:ring-slate-300" />
                            <button class="absolute right-3 top-1/2 -translate-y-1/2 inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-slate-950 text-white transition hover:bg-slate-800">
                                <x-lucide-plus class="h-4 w-4" />
                            </button>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <script>
        const saveButton = document.getElementById('saveButton');
        const fields = [
            document.getElementById('nameInput'),
            document.getElementById('emailInput'),
            document.getElementById('phoneInput'),
            document.getElementById('alamatInput'),
            document.getElementById('bioInput'),
        ];

        const initialValues = fields.reduce((values, field) => {
            values[field.name] = field.value;
            return values;
        }, {});

        function updateSaveButton() {
            const hasChanged = fields.some(field => field.value !== initialValues[field.name]);
            saveButton.disabled = !hasChanged;
            saveButton.classList.toggle('bg-primary', hasChanged);
            saveButton.classList.toggle('hover:bg-gray-400', hasChanged);
            saveButton.classList.toggle('text-white', hasChanged);
            saveButton.classList.toggle('bg-slate-300', !hasChanged);
            saveButton.classList.toggle('text-slate-500', !hasChanged);
            saveButton.classList.toggle('cursor-not-allowed', !hasChanged);
        }

        fields.forEach(field => field.addEventListener('input', updateSaveButton));
        updateSaveButton();
    </script>
</x-job-layout>
