<x-app-layout>
    <div class="mt-20 text-sm relative pt-10">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">

            <!-- Background Header -->
            <div class="absolute top-0 left-0 w-full h-[120px] bg-cover bg-center rounded-xl blur-[2px] brightness-90 z-0"
                style="background-image: url('https://i.pinimg.com/736x/a8/d2/fb/a8d2fb572ed0bc5a01a17da91d058ac6.jpg');">
            </div>

            <div class="relative space-y-8 px-6 max-w-8xl mx-auto sm:px-6 lg:px-8">

                <!-- Header -->
                <div class="flex justify-between items-center bg-white/80 shadow-lg p-6 rounded-2xl backdrop-blur">
                    <div>
                        <h1 class="text-2xl font-semibold text-gray-800">Selamat Datang, Admin dukcapil
                            {{ $user->name }}!</h1>
                        <p class="text-gray-600 text-sm">Kelola data pendaftar BPJS gratis secara efisien dan real-time.
                        </p>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('dukcapil.approve.index') }}"
                            class="flex items-center gap-2 rounded-lg bg-gray-900 py-2 px-4 text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">

                            <!-- Logo SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0 1 12 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                            </svg>

                            <!-- Teks -->
                            Lihat Pendaftar
                        </a>
                    </div>

                </div>

                <!-- Ringkasan -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-gray-800">
                    <!-- Total Pendaftar -->
                    <div class="bg-yellow-50 p-5 rounded-2xl flex items-center gap-4 shadow-sm">
                        <div class="bg-yellow-400 text-yellow-800 p-3 rounded-full text-lg"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Total Pendaftar</p>
                            <p class="text-2xl font-bold text-yellow-600" id="stat-total">{{ $total }}</p>
                        </div>
                    </div>

                    <!-- Terverifikasi -->
                    <div class="bg-green-50 p-5 rounded-2xl flex items-center gap-4 shadow-sm">
                        <div class="bg-green-400 text-green-800 p-3 rounded-full text-lg"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Terverifikasi</p>
                            <p class="text-2xl font-bold text-green-600" id="stat-terverifikasi">{{ $terverifikasi }}</p>
                        </div>
                    </div>

                    <!-- Ditolak -->
                    <div class="bg-red-50 p-5 rounded-2xl flex items-center gap-4 shadow-sm">
                        <div class="bg-red-400 text-red-800 p-3 rounded-full text-lg"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Ditolak</p>
                            <p class="text-2xl font-bold text-red-600" id="stat-ditolak">{{ $ditolak }}</p>
                        </div>
                    </div>

                    <!-- Menunggu -->
                    <div class="bg-blue-50 p-5 rounded-2xl flex items-center gap-4 shadow-sm">
                        <div class="bg-blue-400 text-blue-800 p-3 rounded-full text-lg"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Menunggu</p>
                            <p class="text-2xl font-bold text-blue-600" id="stat-menunggu">{{ $menunggu }}</p>
                        </div>
                    </div>
                </div>



                <!-- Pendaftaran & Kalender -->
                <div class="flex flex-col lg:flex-row gap-6">

                    <!-- Tabel Pendaftaran -->
                    <div class="flex-1 bg-white p-6 rounded-2xl shadow">
                        <!-- Judul dan Form Filter dalam satu baris -->
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-base font-semibold text-gray-800">Pendaftaran Terbaru</h3>

                            <a href="{{ route('dukcapil.approve.index') }}"
                            class="flex items-center gap-2 rounded-lg bg-gray-900 py-1 px-2 text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">

                            <!-- Logo SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0 1 12 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                            </svg>

                            <!-- Teks -->
                            Lihat
                        </a>
                        </div>


                        <div class="overflow-x-auto shadow-sm  ">
                            <table class="min-w-full text-sm text-left text-gray-700">
                                <thead class="bg-indigo-100 text-xs font-semibold text-gray-600  tracking-wide">
                                    <tr>
                                        <th class="px-4 py-3 ">Nama</th>
                                        <th class="px-4 py-3">NIK</th>
                                        <th class="px-4 py-3">Status Dukcapil</th>
                                        <th class="px-4 py-3">Timestamp</th>
                                        <th class="px-4 py-3">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200" id="latest-warga-body">
                                    
                                </tbody>
                            </table>
                        </div>

                    </div>

                            <!-- Modal Multi Step Detail -->
                                                    <div class="modals-container">
                                                        @foreach ($latestWarga as $warga)
                                                        <div id="modal-multistep-{{ $warga->id }}"
                                                        class="modal-container hidden">
                                                        <div class="modal-box">
                                                            <!-- Tombol Tutup -->
                                                            <button onclick="closeAllModals({{ $warga->id }})"
                                                                class="absolute top-4 right-4 text-2xl text-gray-500 bg-transparent border-none cursor-pointer transition-colors duration-300 hover:text-black">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="size-6">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                                </svg>
                                                            </button>

                                                            <!-- Step 1 -->
                                                            <div class="step space-y-4" data-step="1">
                                                                <div
                                                                    class="absolute top-0 left-1/2 -translate-x-1/2 w-48 h-20 bg-gradient-to-b from-blue-400/60 to-transparent blur-2xl opacity-90 z-10">
                                                                </div>

                                                                <div class="text-center mb-6">
                                                                    <div
                                                                        class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-blue-100 text-blue-600 text-3xl font-bold mb-2">
                                                                        {{ strtoupper(substr($warga->nama, 0, 1)) }}
                                                                    </div>
                                                                    <h2 class="text-xl font-bold text-gray-800">
                                                                        {{ $warga->nama }}</h2>
                                                                    <p class="text-sm text-gray-500">Data Peserta
                                                                        BPJS Gratis</p>
                                                                </div>

                                                                @php
                                                                    $path = storage_path(
                                                                        'app/public/' . $warga->foto_ktp,
                                                                    );
                                                                    $isPdf = Str::endsWith(
                                                                        strtolower($warga->foto_ktp),
                                                                        '.pdf',
                                                                    );
                                                                @endphp

                                                                @if ($warga->foto_ktp && file_exists($path))
                                                                    @if ($isPdf)
                                                                        <div class="py-6 text-center">
                                                                            <iframe
                                                                                src="{{ asset('storage/' . $warga->foto_ktp) }}"
                                                                                class="w-full h-96 border rounded-xl"></iframe>
                                                                            <p class="mt-2 text-sm text-gray-600">Ini
                                                                                adalah file PDF - {{ $warga->nama }}
                                                                            </p>
                                                                        </div>
                                                                    @else
                                                                        <div id="lightgallery-ktp-{{ $warga->id }}"
                                                                            class="lightgallery-wrapper py-6">
                                                                            <a href="{{ asset('storage/' . $warga->foto_ktp) }}"
                                                                                data-sub-html="<h4>Foto ktp</h4><p>{{ $warga->nama }}</p>"
                                                                                class="block w-48 mx-auto rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-105">
                                                                                <img src="{{ asset('storage/' . $warga->foto_ktp) }}"
                                                                                    alt="Foto ktp"
                                                                                    class="w-full h-auto rounded-lg"
                                                                                    data-lg-size="1600-1200" />
                                                                            </a>
                                                                        </div>
                                                                    @endif
                                                                @else
                                                                    <div
                                                                        class="border-2 border-dashed border-blue-300 rounded-xl p-6 bg-blue-50 text-center shadow-sm">
                                                                        <div class="flex justify-center">
                                                                            <div
                                                                                class="bg-blue-100 p-4 rounded-full mb-4">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    fill="none" viewBox="0 0 24 24"
                                                                                    stroke-width="1.5"
                                                                                    stroke="currentColor"
                                                                                    class="w-10 h-10 text-blue-500">
                                                                                    <path stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <h1
                                                                            class="text-lg font-semibold text-blue-600">
                                                                            Tidak Ada Foto KTP</h1>
                                                                        <p class="text-sm text-blue-500">Silakan unggah
                                                                            foto KTP jika tersedia.</p>
                                                                    </div>
                                                                @endif



                                                                <div class="mx-20 my-6 py-6">
                                                                    <div class="space-y-4 text-sm text-gray-700">
                                                                        {{-- NIK & Tanggal Lahir --}}
                                                                        <div
                                                                            class="flex flex-col md:flex-row md:justify-between md:space-x-4">
                                                                            <div class="flex-1">
                                                                                <p class="text-gray-500 mb-1">NIK</p>
                                                                                <p class="font-medium">
                                                                                    {{ $warga->nik ?? '-' }}</p>
                                                                            </div>
                                                                            <div class="flex-1 mt-4 md:mt-0">
                                                                                <p class="text-gray-500 mb-1">Tanggal
                                                                                    Lahir</p>
                                                                                <p class="font-medium">
                                                                                    {{ \Carbon\Carbon::parse($warga->tanggal_lahir)->format('d-m-Y') }}
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                        {{-- Alamat Lengkap --}}
                                                                        <div class="">
                                                                            <p class="text-gray-500 mb-1">Alamat</p>
                                                                            <p class="font-medium">
                                                                                {{ $warga->alamat_kk }}</p>
                                                                        </div>

                                                                        {{-- dukcapil & Kecamatan --}}
                                                                        <div
                                                                            class="flex flex-col md:flex-row md:justify-between md:space-x-4 ">
                                                                            <div class="flex-1">
                                                                                <p class="text-gray-500 mb-1">dukcapil
                                                                                </p>
                                                                                <p class="font-medium">
                                                                                    {{ $warga->nama_dukcapil }}
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="flex-1 mt-4 md:mt-0 rounded-md border-2 border-gray-200 bg-gray-50 p-2">
                                                                                <p class="text-gray-500 mb-1">Surat
                                                                                    Domisili akan Dikeluarkan Oleh
                                                                                </p>
                                                                                <p class="font-medium">
                                                                                    {{ $warga->targetdukcapil?->name ?? '-' }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <p class="text-gray-500 mb-1">Kecamatan</p>
                                                                            <p class="font-medium">
                                                                                {{ $warga->kecamatan }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="text-center border-t-2 border-dashed border-gray-200 pt-7">
                                                                    <h2 class="text-xl font-semibold text-gray-800">
                                                                        Informasi
                                                                        Kartu Keluarga</h2>
                                                                    <p class="text-sm text-gray-500">Informasi lengkap
                                                                        mengenai
                                                                        warga yang terdaftar.</p>
                                                                </div>

                                                                @php
                                                                    $path = storage_path(
                                                                        'app/public/' . $warga->foto_kk,
                                                                    );
                                                                    $isPdf = Str::endsWith(
                                                                        strtolower($warga->foto_kk),
                                                                        '.pdf',
                                                                    );
                                                                @endphp

                                                                @if ($warga->foto_kk && file_exists($path))
                                                                    @if ($isPdf)
                                                                        <div class="py-6 text-center">
                                                                            <iframe
                                                                                src="{{ asset('storage/' . $warga->foto_kk) }}"
                                                                                class="w-full h-96 border rounded-xl"></iframe>
                                                                            <p class="mt-2 text-sm text-gray-600">Ini
                                                                                adalah file PDF - {{ $warga->nama }}
                                                                            </p>
                                                                        </div>
                                                                    @else
                                                                        <div id="lightgallery-kk-{{ $warga->id }}"
                                                                            class="lightgallery-wrapper py-6">
                                                                            <a href="{{ asset('storage/' . $warga->foto_kk) }}"
                                                                                data-sub-html="<h4>Foto kk</h4><p>{{ $warga->nama }}</p>"
                                                                                class="block w-48 mx-auto rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-105">
                                                                                <img src="{{ asset('storage/' . $warga->foto_kk) }}"
                                                                                    alt="Foto kk"
                                                                                    class="w-full h-auto rounded-lg"
                                                                                    data-lg-size="1600-1200" />
                                                                            </a>
                                                                        </div>
                                                                    @endif
                                                                @else
                                                                    <div
                                                                        class="border-2 border-dashed border-blue-300 rounded-xl p-6 bg-blue-50 text-center shadow-sm">
                                                                        <div class="flex justify-center">
                                                                            <div
                                                                                class="bg-blue-100 p-4 rounded-full mb-4">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    fill="none" viewBox="0 0 24 24"
                                                                                    stroke-width="1.5"
                                                                                    stroke="currentColor"
                                                                                    class="w-10 h-10 text-blue-500">
                                                                                    <path stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <h1
                                                                            class="text-lg font-semibold text-blue-600">
                                                                            Tidak Ada Foto Kartu Keluarga</h1>
                                                                        <p class="text-sm text-blue-500">Silakan unggah
                                                                            foto Kartu Keluarga jika tersedia.</p>
                                                                    </div>
                                                                @endif
                                                                <div class="my-6 py-6 mx-20">
                                                                    <p><span
                                                                            class="inline-block w-28 font-bold px-1 py-0.5 text-gray-600">NIK</span>:
                                                                        {{ $warga->nik ?? '-' }}</p>
                                                                </div>


                                                                {{-- surat sakit --}}
                                                                <div
                                                                    class="text-center border-t-2 border-dashed border-gray-200 pt-7">
                                                                    <h2 class="text-xl font-semibold text-gray-800">
                                                                        Surat Keterangan Sakit</h2>
                                                                    <p class="text-sm text-gray-500">Informasi lengkap
                                                                        mengenai
                                                                        warga yang terdaftar.</p>
                                                                </div>

                                                                @php
                                                                    $path = storage_path(
                                                                        'app/public/' . $warga->surat_keterangan_sakit,
                                                                    );
                                                                    $isPdf = Str::endsWith(
                                                                        strtolower($warga->surat_keterangan_sakit),
                                                                        '.pdf',
                                                                    );
                                                                @endphp

                                                                @if ($warga->surat_keterangan_sakit && file_exists($path))
                                                                    @if ($isPdf)
                                                                        <div class="py-6 text-center">
                                                                            <iframe
                                                                                src="{{ asset('storage/' . $warga->surat_keterangan_sakit) }}"
                                                                                class="w-full h-96 border rounded-xl"></iframe>
                                                                            <p class="mt-2 text-sm text-gray-600">Ini
                                                                                adalah file PDF - {{ $warga->nama }}
                                                                            </p>
                                                                        </div>
                                                                    @else
                                                                        <div id="lightgallery-surat-sakit-{{ $warga->id }}"
                                                                            class="lightgallery-wrapper py-6">
                                                                            <a href="{{ asset('storage/' . $warga->surat_keterangan_sakit) }}"
                                                                                data-sub-html="<h4>Surat Keterangan Sakit</h4><p>{{ $warga->nama }}</p>"
                                                                                class="block w-48 mx-auto rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-105">
                                                                                <img src="{{ asset('storage/' . $warga->surat_keterangan_sakit) }}"
                                                                                    alt="Surat Keterangan Sakit"
                                                                                    class="w-full h-auto rounded-lg"
                                                                                    data-lg-size="1600-1200" />
                                                                            </a>
                                                                        </div>
                                                                    @endif
                                                                @else
                                                                    <div
                                                                        class="border-2 border-dashed border-blue-300 rounded-xl p-6 bg-blue-50 text-center shadow-sm">
                                                                        <div class="flex justify-center">
                                                                            <div
                                                                                class="bg-blue-100 p-4 rounded-full mb-4">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    fill="none" viewBox="0 0 24 24"
                                                                                    stroke-width="1.5"
                                                                                    stroke="currentColor"
                                                                                    class="w-10 h-10 text-blue-500">
                                                                                    <path stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <h1
                                                                            class="text-lg font-semibold text-blue-600">
                                                                            Tidak Ada Surat Keterang Sakit</h1>
                                                                        <p class="text-sm text-blue-500">Silakan unggah
                                                                            Surat Keterangan Sakit jika tersedia.</p>
                                                                    </div>
                                                                @endif


<div class="my-6 py-6 mx-20">
                                                                    
<div
                                                                            class="flex flex-col md:flex-row md:justify-between md:space-x-4">
                                                                            <div class="flex-1 mt-4 md:mt-0">
                                                                                <p class="text-gray-500 mb-1">Tanggal Pasien Masuk</p>
                                                                                <p>
                                                                                    {{ \Carbon\Carbon::parse($warga->tanggal_pasien_masuk)->format('d-m-Y') }}
                                                                                </p>
                                                                            </div>
                                                                            <div class="flex-1 mt-4 md:mt-0">
                                                                                <p class="text-gray-500 mb-1">Tanggal Pasien Keluar</p>
                                                                                <p>
                                                                                    {{ \Carbon\Carbon::parse($warga->tanggal_pasien_keluar)->format('d-m-Y') }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                </div>


                                                                {{-- surat domisili --}}
                                                                <div
                                                                    class="text-center border-t-2 border-dashed border-gray-200 pt-7">
                                                                    <h2 class="text-xl font-semibold text-gray-800">
                                                                        Surat Keterangan Domisili</h2>
                                                                    <p class="text-sm text-gray-500">Informasi lengkap
                                                                        mengenai
                                                                        warga yang terdaftar.</p>
                                                                </div>

                                                                @php
                                                                    $path = storage_path(
                                                                        'app/public/' .
                                                                            $warga->surat_keterangan_domisili,
                                                                    );
                                                                    $isPdf = Str::endsWith(
                                                                        strtolower($warga->surat_keterangan_domisili),
                                                                        '.pdf',
                                                                    );
                                                                @endphp

                                                                @if ($warga->surat_keterangan_domisili && file_exists($path))
                                                                    {{-- Cek apakah surat ditolak --}}
                                                                    @if ($warga->alasan_penolakan_dukcapil)
                                                                        {{-- Tampilan untuk penolakan --}}
                                                                        <!-- Card Penolakan -->
                                                                        <div class="mt-6 grid grid-cols-1 gap-4">
                                                                            <div
                                                                                class="bg-white border border-red-200 shadow-lg rounded-2xl p-6 transition-transform hover:scale-[1.01]">
                                                                                <div
                                                                                    class="flex flex-col items-center text-center space-y-4">
                                                                                    <!-- Icon -->
                                                                                    <div
                                                                                        class="w-14 h-14 bg-red-100 text-red-600 flex items-center justify-center rounded-full shadow-inner">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            class="w-7 h-7"
                                                                                            fill="none"
                                                                                            viewBox="0 0 24 24"
                                                                                            stroke="currentColor">
                                                                                            <path
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                stroke-width="2"
                                                                                                d="M12 9v2m0 4h.01M4.93 4.93l14.14 14.14M6.343 17.657l-1.414-1.414M18.364 5.636l-1.414 1.414" />
                                                                                        </svg>
                                                                                    </div>

                                                                                    <!-- Judul -->
                                                                                    <h3
                                                                                        class="text-lg font-semibold text-red-600">
                                                                                        Catatan Penolakan dukcapil</h3>

                                                                                    <!-- Isi Catatan -->
                                                                                    <p
                                                                                        class="text-gray-700 text-sm leading-relaxed px-2">
                                                                                        {{ $warga->alasan_penolakan_dukcapil }}
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @else
                                                                        {{-- Tampilan untuk surat diterima --}}
                                                                        @if ($isPdf)
                                                                            <div class="py-6 text-center">
                                                                                <iframe
                                                                                    src="{{ asset('storage/' . $warga->surat_keterangan_domisili) }}"
                                                                                    class="w-full h-96 border rounded-xl"></iframe>
                                                                                <p class="mt-2 text-sm text-gray-600">
                                                                                    Ini adalah file PDF -
                                                                                    {{ $warga->nama }}
                                                                                </p>
                                                                            </div>
                                                                        @else
                                                                            <div id="lightgallery-surat-domisili-{{ $warga->id }}"
                                                                                class="lightgallery-wrapper py-6">
                                                                                <a href="{{ asset('storage/' . $warga->surat_keterangan_domisili) }}"
                                                                                    data-sub-html="<h4>Surat Keterangan domisili</h4><p>{{ $warga->nama }}</p>"
                                                                                    class="block w-48 mx-auto rounded-xl overflow-hidden shadow-lg transition-transform duration-300 hover:scale-105">
                                                                                    <img src="{{ asset('storage/' . $warga->surat_keterangan_domisili) }}"
                                                                                        alt="Surat Keterangan domisili"
                                                                                        class="w-full h-auto rounded-lg"
                                                                                        data-lg-size="1600-1200" />
                                                                                </a>
                                                                            </div>
                                                                        @endif
                                                                    @endif
                                                                @else
                                                                    {{-- Surat belum diupload dan tidak ditolak --}}
                                                                    <div
                                                                        class="border-2 border-dashed border-blue-300 rounded-xl p-6 bg-blue-50 text-center shadow-sm mt-6">
                                                                        <div class="flex justify-center">
                                                                            <div
                                                                                class="bg-blue-100 p-4 rounded-full mb-4">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    fill="none" viewBox="0 0 24 24"
                                                                                    stroke-width="1.5"
                                                                                    stroke="currentColor"
                                                                                    class="w-10 h-10 text-blue-500">
                                                                                    <path stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <h1
                                                                            class="text-lg font-semibold text-blue-600">
                                                                            Tidak Ada Surat Keterangan domisili</h1>
                                                                        <p class="text-sm text-blue-500">Silakan unggah
                                                                            Surat Keterangan domisili jika tersedia.</p>
                                                                    </div>
                                                                @endif
                                                                <!-- Card Penolakan -->
                                                                @if ($warga->alasan_penolakan_dukcapil)
                                                                    <div class="mt-6 grid grid-cols-1 gap-4">
                                                                        <div
                                                                            class="bg-white border border-red-200 shadow-lg rounded-2xl p-6 transition-transform hover:scale-[1.01]">
                                                                            <div
                                                                                class="flex flex-col items-center text-center space-y-4">
                                                                                <!-- Icon -->
                                                                                <div
                                                                                    class="w-14 h-14 bg-red-100 text-red-600 flex items-center justify-center rounded-full shadow-inner">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        class="w-7 h-7" fill="none"
                                                                                        viewBox="0 0 24 24"
                                                                                        stroke="currentColor">
                                                                                        <path stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="2"
                                                                                            d="M12 9v2m0 4h.01M4.93 4.93l14.14 14.14M6.343 17.657l-1.414-1.414M18.364 5.636l-1.414 1.414" />
                                                                                    </svg>
                                                                                </div>

                                                                                <!-- Judul -->
                                                                                <h3
                                                                                    class="text-lg font-semibold text-red-600">
                                                                                    Catatan Penolakan Dukcapil</h3>

                                                                                <!-- Isi Catatan -->
                                                                                <p
                                                                                    class="text-gray-700 text-sm leading-relaxed px-2">
                                                                                    {{ $warga->alasan_penolakan_dukcapil }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif

                                                                @if ($warga->alasan_penolakan_dinkes)
                                                                    <!-- Card Penolakan -->
                                                                    <div class="mt-6 grid grid-cols-1 gap-4">
                                                                        <div
                                                                            class="bg-white border border-red-200 shadow-lg rounded-2xl p-6 transition-transform hover:scale-[1.01]">
                                                                            <div
                                                                                class="flex flex-col items-center text-center space-y-4">
                                                                                <!-- Icon -->
                                                                                <div
                                                                                    class="w-14 h-14 bg-red-100 text-red-600 flex items-center justify-center rounded-full shadow-inner">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        class="w-7 h-7" fill="none"
                                                                                        viewBox="0 0 24 24"
                                                                                        stroke="currentColor">
                                                                                        <path stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="2"
                                                                                            d="M12 9v2m0 4h.01M4.93 4.93l14.14 14.14M6.343 17.657l-1.414-1.414M18.364 5.636l-1.414 1.414" />
                                                                                    </svg>
                                                                                </div>

                                                                                <!-- Judul -->
                                                                                <h3
                                                                                    class="text-lg font-semibold text-red-600">
                                                                                    Catatan Penolakan Dinkes</h3>

                                                                                <!-- Isi Catatan -->
                                                                                <p
                                                                                    class="text-gray-700 text-sm leading-relaxed px-2">
                                                                                    {{ $warga->alasan_penolakan_dinkes }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif


                                                                <div class="mt-6 flex justify-end gap-2">
                                                                    <div class="mt-6 flex justify-end gap-2">
                                                                        <button type="button"
                                                                            onclick="closeAllModals({{ $warga->id }})"
                                                                            class="btn-cancel">Tutup</button>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                     @endforeach
                                                    </div>

                    <!-- Kalender -->
                    <div class="w-full lg:w-[350px] bg-white p-6 rounded-2xl shadow  text-gray-800">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-base font-semibold">Kalender</h2>
                            <span id="monthYear" class="text-sm text-gray-500"></span>
                        </div>
                        <div class="grid grid-cols-7 text-center text-xs text-gray-400 mb-2">
                            <div>Sen</div>
                            <div>Sel</div>
                            <div>Rab</div>
                            <div>Kam</div>
                            <div>Jum</div>
                            <div>Sab</div>
                            <div>Min</div>
                        </div>
                        <div id="calendarGrid" class="grid grid-cols-7 gap-2 text-sm text-center"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- JS Kalender -->
    <script>
        const today = new Date();
        const year = today.getFullYear();
        const month = today.getMonth();
        const currentDate = today.getDate();

        const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];
        document.getElementById("monthYear").innerText = `${monthNames[month]} ${year}`;

        const firstDay = new Date(year, month, 1);
        const startDay = (firstDay.getDay() + 6) % 7;
        const totalDays = new Date(year, month + 1, 0).getDate();
        const calendarGrid = document.getElementById("calendarGrid");

        for (let i = 0; i < startDay; i++) {
            calendarGrid.appendChild(document.createElement("div"));
        }
        for (let day = 1; day <= totalDays; day++) {
            const cell = document.createElement("div");
            cell.textContent = day;
            if (day === currentDate) {
                cell.className =
                    "bg-yellow-400 text-white font-bold rounded-full w-8 h-8 flex items-center justify-center mx-auto shadow";
            } else {
                cell.className =
                    "rounded-full w-8 h-8 flex items-center justify-center mx-auto hover:bg-gray-200 cursor-pointer";
            }
            calendarGrid.appendChild(cell);
        }
    </script>

<script>
    const reloadStatsInterval = 10000; // 10 detik

    // Cek apakah ada modal yang sedang terbuka
    function isAnyModalOpen() {
        return document.querySelectorAll('.modal-container:not(.hidden)').length > 0;
    }

    // Format tanggal menjadi dd-mm-yyyy
    function formatDate(dateStr) {
        if (!dateStr) return '-';
        const d = new Date(dateStr);
        return `${d.getDate().toString().padStart(2, '0')}-${(d.getMonth() + 1).toString().padStart(2, '0')}-${d.getFullYear()}`;
    }

    // Buat badge status sesuai gaya Tailwind di Blade
    function getStatusBadge(status) {
        if (!status || status === 'pending') {
            return `<span class="relative inline-block items-center px-2 py-1 font-sans text-xs font-bold text-gray-900 uppercase rounded-md select-none whitespace-nowrap bg-gray-500/20">Menunggu</span>`;
        } else if (status === 'approved') {
            return `<span class="relative inline-block items-center px-2 py-1 font-sans text-xs font-bold text-green-900 uppercase rounded-md select-none whitespace-nowrap bg-green-500/20">Disetujui</span>`;
        } else {
            return `<span class="relative inline-block items-center px-2 py-1 font-sans text-xs font-bold text-red-900 uppercase rounded-md select-none whitespace-nowrap bg-red-500/20">Ditolak</span>`;
        }
    }

    // Update statistik dashboard dan tabel warga terbaru
    function updateDashboardStats(data) {
        document.getElementById('stat-total').innerText = data.total ?? 0;
        document.getElementById('stat-terverifikasi').innerText = data.terverifikasi ?? 0;
        document.getElementById('stat-ditolak').innerText = data.ditolak ?? 0;
        document.getElementById('stat-menunggu').innerText = data.menunggu ?? 0;

        const tbody = document.getElementById('latest-warga-body');
        tbody.innerHTML = '';

        if (Array.isArray(data.warga)) {
            data.warga.forEach(w => {
                const row = `
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-4 py-3">${w.nama}</td>
                        <td class="px-4 py-3">${w.nik}</td>
                        <td class="px-4 py-3">${getStatusBadge(w.status)}</td>
                        <td class="px-4 py-3">${w.tanggal ? formatDate(w.tanggal) : '-'}</td>

                        <td class="px-4 py-3">
                            <button onclick="openMultiStepModal(${w.id})" class="w-full text-left px-4 py-2 text-sm text-green-700 hover:bg-gray-100">
                                Detail
                            </button>
                        </td>
                    </tr>`;
                tbody.insertAdjacentHTML('beforeend', row);
            });
        }
    }

    // Ambil data dari endpoint refresh-json dan update tampilan
    function refreshDashboardData() {
        if (isAnyModalOpen()) {
            console.log('Auto refresh dibatalkan karena ada modal terbuka');
            return;
        }

        console.log('Auto refresh berjalan');
        fetch('/dukcapil/dashboard-dukcapil/refresh-json', {
            credentials: 'same-origin'
        })
        .then(res => {
            if (!res.ok) throw new Error('Network response was not ok');
            const contentType = res.headers.get('content-type');
            if (!contentType || !contentType.includes('application/json')) {
                throw new Error('Expected JSON response but got ' + contentType);
            }
            return res.json();
        })
        .then(data => updateDashboardStats(data))
        .catch(err => {
            console.error('Refresh error:', err);
        });
    }

    // Jalankan saat halaman selesai dimuat
    document.addEventListener('DOMContentLoaded', function() {
        refreshDashboardData(); // Pertama kali
        setInterval(refreshDashboardData, reloadStatsInterval); // Selanjutnya
    });
</script>



</x-app-layout>

<script>
    function previewImage(event, previewId) {
        const input = event.target;
        const preview = document.getElementById(previewId);

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<style>
    .modal-container {
        position: fixed;
        inset: 0;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 50 !important;
        padding: 1rem;
        overflow: auto;
    }

    .modal-box {
        background: white;
        padding: 1.5rem;
        border-radius: 1rem;
        width: 70%;
        max-width: 800px;
        max-height: 90vh;
        overflow-y: auto;
        position: relative;
        transition: all 0.3s ease-in-out;
        animation: fadeInScale 0.3s ease;
    }

    @keyframes fadeInScale {
        from {
            opacity: 0;
            transform: scale(0.95);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }


    .img-preview {
        width: 100%;
        max-width: 300px;
        margin: 0 auto 1rem;
        border-radius: 0.5rem;
        display: block;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .img-preview:hover {
        transform: scale(1.03);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
    }

    .btn-next,
    .btn-prev,
    .btn-accept,
    .btn-decline,
    .btn-cancel {
        padding: 0.5rem 1rem;
        border-radius: 0.5rem;
        font-weight: bold;
        color: white;
        border: none;
        cursor: pointer;
        transition: background 0.3s;
    }

    .btn-next {
        background-color: #2563eb;
    }

    /* blue-600 */
    .btn-next:hover {
        background-color: #1d4ed8;
    }

    .btn-prev {
        background-color: #9ca3af;
    }

    /* gray-400 */
    .btn-prev:hover {
        background-color: #6b7280;
    }

    .btn-accept {
        background-color: #16a34a;
    }

    /* green-600 */
    .btn-accept:hover {
        background-color: #15803d;
    }

    .btn-decline {
        background-color: #dc2626;
    }

    /* red-600 */
    .btn-decline:hover {
        background-color: #b91c1c;
    }

    .btn-cancel {
        background-color: #6b7280;
    }

    /* gray-500 */
    .btn-cancel:hover {
        background-color: #4b5563;
    }

    .textarea {
        width: 100%;
        border: 1px solid #ccc;
        padding: 0.75rem;
        border-radius: 0.5rem;
        margin-bottom: 1rem;
        resize: vertical;
    }

    .hidden {
        display: none !important;
    }

    /* Pastikan lightGallery di atas modal */
    .lg-backdrop,
    .lg-outer {
        z-index: 10000 !important;
        position: fixed !important;
    }

    /* LightGallery global override untuk kenyamanan */
    .lg-backdrop {
        background-color: rgba(0, 0, 0, 0.85) !important;
        backdrop-filter: blur(8px);
    }

    .lg-sub-html {
        color: #f3f4f6 !important;
        /* text-gray-100 */
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        text-align: center;
    }

    .lg-outer .lg-img-wrap {
        padding: 1rem;
        border-radius: 1rem;
        background-color: rgba(255, 255, 255, 0.02);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
    }

    .lg-outer .lg-thumb {
        background-color: #1f2937;
        /* dark bg */
    }

    .lg-toolbar {
        background-color: rgba(0, 0, 0, 0.2) !important;
        backdrop-filter: blur(6px);
    }

    .lg-next,
    .lg-prev {
        background-color: rgba(255, 255, 255, 0.1) !important;
        border-radius: 100%;
        transition: background 0.3s ease;
    }

    .lg-next:hover,
    .lg-prev:hover {
        background-color: rgba(255, 255, 255, 0.3) !important;
    }

    /* Reset gambar agar tidak membesar atau aneh di lightGallery */
    .lg-img-wrap img {
        max-width: 100%;
        height: auto;
        object-fit: contain;
        opacity: 1 !important;
        transform: none !important;
        filter: none !important;
    }

    /* Hindari overflow aneh */
    .lg-img-wrap {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .lg-inner {
        overflow: hidden !important;
    }

    /* Matikan efek sticky saat modal terbuka */
    body.modal-open .sticky {
        position: static !important;
        z-index: 0 !important;
        background-color: transparent !important;
    }

    /* Biar modal makin jelas di atas semua */
    .modal-container {
        z-index: 9999 !important;
        background-color: rgba(0, 0, 0, 0.6);
        /* gelapkan background */
    }
</style>



<script>
    function openMultiStepModal(id) {
        document.body.classList.add('modal-open'); // Tambahkan ini
        document.getElementById('modal-multistep-' + id).classList.remove('hidden');
        showStep(id, 1);

        // Inisialisasi galeri KTP
        const ktpGallery = document.getElementById('lightgallery-ktp-' + id);
        if (ktpGallery && !ktpGallery.classList.contains('lg-initialized')) {
            lightGallery(ktpGallery, {
                plugins: [lgZoom], // tambahkan plugin lain jika mau
                speed: 500,
                // licenseKey: '0000-0000-000-0000' // biarkan tidak ada
            });
            ktpGallery.classList.add('lg-initialized');
        }

        // Inisialisasi lightgallery hanya sekali untuk KK
        const galleryElement = document.getElementById('lightgallery-kk-' + id);
        if (galleryElement && !galleryElement.classList.contains('lg-initialized')) {
            lightGallery(galleryElement, {
                plugins: [lgZoom],
                speed: 500,
                //  licenseKey: '0000-0000-000-0000',  Removed to fix license warning
            });
            galleryElement.classList.add('lg-initialized');
        }

        // Inisialisasi galeri KTP
        const suratSakitGallery = document.getElementById('lightgallery-surat-sakit-' + id);
        if (suratSakitGallery && !suratSakitGallery.classList.contains('lg-initialized')) {
            lightGallery(suratSakitGallery, {
                plugins: [lgZoom], // tambahkan plugin lain jika mau
                speed: 500,
                // licenseKey: '0000-0000-000-0000' // biarkan tidak ada
            });
            suratSakitGallery.classList.add('lg-initialized');
        }

        // Inisialisasi galeri KTP
        const suratDomisiliGallery = document.getElementById('lightgallery-surat-domisili-' + id);
        if (suratDomisiliGallery && !suratDomisiliGallery.classList.contains('lg-initialized')) {
            lightGallery(suratDomisiliGallery, {
                plugins: [lgZoom], // tambahkan plugin lain jika mau
                speed: 500,
                // licenseKey: '0000-0000-000-0000' // biarkan tidak ada
            });
            suratDomisiliGallery.classList.add('lg-initialized');
        }
    }

    function showStep(id, step) {
        const modal = document.getElementById('modal-multistep-' + id);
        const steps = modal.querySelectorAll('.step');
        steps.forEach(div => {
            div.classList.add('hidden');
            if (div.getAttribute('data-step') == step) {
                div.classList.remove('hidden');
            }
        });
    }

    function goToStep(id, step) {
        showStep(id, step);
    }

    function showTolakModal(id) {
        document.getElementById('modal-multistep-' + id).classList.add('hidden');
        document.getElementById('modal-tolak-' + id).classList.remove('hidden');
    }

    function closeAllModals(id) {
        document.body.classList.remove('modal-open'); // Tambahkan ini juga
        document.getElementById('modal-multistep-' + id)?.classList.add('hidden');
        document.getElementById('modal-tolak-' + id)?.classList.add('hidden');
        // Also check if any other modals are still open, if none, remove modal-open from body
        setTimeout(() => {
            if (document.querySelectorAll('.modal-container:not(.hidden)').length === 0) {
                document.body.classList.remove('modal-open');
            }
        }, 100);
    }
</script>

<script>
    function previewFile(event, previewContainerId, imgId, pdfId) {
        const input = event.target;
        const previewContainer = document.getElementById(previewContainerId);
        const previewImg = document.getElementById(imgId);
        const previewPdf = document.getElementById(pdfId);

        if (input.files && input.files[0]) {
            const file = input.files[0];
            const fileType = file.type;

            const reader = new FileReader();
            reader.onload = function(e) {
                previewContainer.classList.remove('hidden');

                if (fileType === 'application/pdf') {
                    previewPdf.src = e.target.result;
                    previewPdf.classList.remove('hidden');
                    previewImg.classList.add('hidden');
                } else if (fileType.startsWith('image/')) {
                    previewImg.src = e.target.result;
                    previewImg.classList.remove('hidden');
                    previewPdf.classList.add('hidden');
                } else {
                    previewImg.classList.add('hidden');
                    previewPdf.classList.add('hidden');
                }
            }
            reader.readAsDataURL(file);
        }
    }
</script>
