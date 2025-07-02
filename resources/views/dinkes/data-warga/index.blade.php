<x-app-layout>

    <div class="mt-20 text-sm relative pt-10">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div
                class="absolute bg-center top-0 left-0 w-full h-[120px] z-0 bg-[url('https://i.pinimg.com/736x/a8/d2/fb/a8d2fb572ed0bc5a01a17da91d058ac6.jpg')] rounded-xl">
            </div>
            <div class="relative px-6 max-w-8xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">


                        <div
                            class="relative flex flex-col w-full h-full text-gray-700 bg-white rounded-xl bg-clip-border">
                            <div
                                class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
                                <div class="flex items-center justify-between gap-8 mb-8">
                                    <div>
                                        <h5
                                            class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-gray-900">
                                            Pendaftaran BPJS Gratis
                                        </h5>
                                        <p
                                            class="block mt-1 font-sans text-base antialiased font-normal leading-relaxed text-gray-500">
                                            Lihat informasi mengenai pendaftaran BPJS, cek Kelengkapan data secara
                                            berkala.
                                        </p>
                                    </div>
                                    <div class="flex flex-col gap-2 shrink-0 sm:flex-row">

                                        <!-- Tombol untuk membuka modal -->
                                        <button
                                            onclick="document.getElementById('modal-laporan').classList.remove('hidden')"
                                            class="flex select-none items-center gap-3 rounded-lg bg-gray-900 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                            type="button">

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-4 h-4">
                                                <path fill-rule="evenodd"
                                                    d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 0 0 3 3h.27l-.155 1.705A1.875 1.875 0 0 0 7.232 22.5h9.536a1.875 1.875 0 0 0 1.867-2.045l-.155-1.705h.27a3 3 0 0 0 3-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0 0 18 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM16.5 6.205v-2.83A.375.375 0 0 0 16.125 3h-8.25a.375.375 0 0 0-.375.375v2.83a49.353 49.353 0 0 1 9 0Zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 0 1-.374.409H7.232a.375.375 0 0 1-.374-.409l.526-5.784a.373.373 0 0 1 .333-.337 41.741 41.741 0 0 1 8.566 0Zm.967-3.97a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H18a.75.75 0 0 1-.75-.75V10.5ZM15 9.75a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V10.5a.75.75 0 0 0-.75-.75H15Z"
                                                    clip-rule="evenodd" />
                                            </svg>


                                            Laporan
                                        </button>




                                        <!-- Modal -->


                                        <div id="modal-laporan"
                                            class="modal-container hidden fixed inset-0 z-[9999] items-center justify-center bg-black/40">
                                            <div class="modal-box bg-white p-6 rounded-xl relative max-w-sm w-full">
                                                <button
                                                    onclick="document.getElementById('modal-laporan').classList.add('hidden')"
                                                    class="absolute top-4 right-4 text-2xl text-gray-500 hover:text-black transition-colors">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="size-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                    </svg>
                                                </button>

                                                <!-- Konten Modal -->
                                                <div class="text-center">
                                                    <div
                                                        class="absolute top-0 left-1/2 -translate-x-1/2 w-48 h-20 bg-gradient-to-b from-blue-400/60 to-transparent blur-2xl opacity-90 z-10">
                                                    </div>
                                                    <h2 class="text-lg font-semibold text-gray-800 mb-2">Unduh Laporan
                                                    </h2>
                                                    <p class="text-sm text-gray-500 mb-6">Pilih Rentang Tanggal
                                                        Pengunduhan
                                                        Laporan Anda!</p>
                                                    <p></p>
                                                    <!-- Tombol Aksi -->
                                                    <div class="flex justify-center gap-4">

                                                        @php
                                                            $inputClasses =
                                                                'text-gray-500 text-sm w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition';
                                                        @endphp

                                                        <form action="{{ route('export.excel') }}" method="POST"
                                                            class="space-y-6">
                                                            @csrf

                                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                                                {{-- Input Tanggal Mulai --}}
                                                                <div class="relative">
                                                                    <label for="start_date"
                                                                        class="block text-sm font-medium text-gray-700 mb-1">
                                                                        <span class="inline-flex items-center gap-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-5 h-5 text-blue-500"
                                                                                fill="none" viewBox="0 0 24 24"
                                                                                stroke="currentColor">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M8 7V3m8 4V3M5 11h14M5 19h14M3 7h18a2 2 0 012 2v11a2 2 0 01-2 2H3a2 2 0 01-2-2V9a2 2 0 012-2z" />
                                                                            </svg>
                                                                            Tanggal Mulai
                                                                        </span>
                                                                    </label>
                                                                    <div
                                                                        class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">

                                                                    </div>
                                                                    <input type="date" name="start_date"
                                                                        id="start_date" required
                                                                        class="{{ $inputClasses }} ">
                                                                </div>

                                                                {{-- Input Tanggal Selesai --}}
                                                                <div class="relative">
                                                                    <label for="end_date"
                                                                        class="block text-sm font-medium text-gray-700 mb-1">
                                                                        <span class="inline-flex items-center gap-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-5 h-5 text-blue-500"
                                                                                fill="none" viewBox="0 0 24 24"
                                                                                stroke="currentColor">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M8 7V3m8 4V3M5 11h14M5 19h14M3 7h18a2 2 0 012 2v11a2 2 0 01-2 2H3a2 2 0 01-2-2V9a2 2 0 012-2z" />
                                                                            </svg>
                                                                            Tanggal Selesai
                                                                        </span>
                                                                    </label>
                                                                    <div
                                                                        class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">

                                                                    </div>
                                                                    <input type="date" name="end_date" id="end_date"
                                                                        required class="{{ $inputClasses }}">
                                                                </div>
                                                            </div>

                                                            {{-- Tombol --}}
                                                            <div class="flex justify-between gap-4 pt-2">
                                                                <button type="submit"
                                                                    class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg shadow transition">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-5 h-5" fill="none"
                                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="1.5"
                                                                            d="M12 4v16m0 0l-6-6m6 6l6-6" />
                                                                    </svg>
                                                                    Export Excel
                                                                </button>

                                                                <button type="button"
                                                                    onclick="document.getElementById('modal-laporan').classList.add('hidden')"
                                                                    class="bg-gray-300 text-gray-800 px-6 py-2 rounded-lg font-semibold hover:bg-gray-400 transition">
                                                                    Batal
                                                                </button>
                                                            </div>
                                                        </form>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                    </div>






                                </div>
                                <div class="flex flex-col items-center justify-between gap-4 md:flex-row">
                                    <div class="block z-0 w-full overflow-hidden md:w-max">
                                        <nav>
                                            <ul role="tablist"
                                                class="relative inline-flex flex-row p-1 rounded-lg bg-gray-900">
                                                <li role="tab">
                                                    <a href="{{ route('dinkes.data-warga.index', ['filter' => 'all']) }}"
                                                        class="relative flex items-center justify-center w-full h-full px-2 py-1 font-sans text-base antialiased font-normal leading-relaxed text-center cursor-pointer select-none rounded-md
                                        @if ($filter === 'all') text-gray-900 bg-white shadow @else text-white @endif">
                                                        <div class="z-20 text-inherit">
                                                            &nbsp;&nbsp;Semua&nbsp;&nbsp;
                                                        </div>
                                                    </a>
                                                </li>
                                                <li role="tab">
                                                    <a href="{{ route('dinkes.data-warga.index', ['filter' => 'approved']) }}"
                                                        class="relative flex items-center justify-center w-full h-full px-2 py-1 font-sans text-base antialiased font-normal leading-relaxed text-center cursor-pointer select-none rounded-md
                                        @if ($filter === 'approved') text-gray-900 bg-white shadow @else text-white @endif">
                                                        <div class="z-20 text-inherit">
                                                            &nbsp;&nbsp;Disetujui&nbsp;&nbsp;
                                                        </div>
                                                    </a>
                                                </li>
                                                <li role="tab">
                                                    <a href="{{ route('dinkes.data-warga.index', ['filter' => 'rejected']) }}"
                                                        class="relative flex items-center justify-center w-full h-full px-2 py-1 font-sans text-base antialiased font-normal leading-relaxed text-center cursor-pointer select-none rounded-md
                                        @if ($filter === 'rejected') text-gray-900 bg-white shadow @else text-white @endif">
                                                        <div class="z-20 text-inherit">
                                                            &nbsp;&nbsp;Ditolak&nbsp;&nbsp;
                                                        </div>
                                                    </a>
                                                </li>
                                                <li role="tab">
                                                    <a href="{{ route('dinkes.data-warga.index', ['filter' => 'pending']) }}"
                                                        class="relative flex items-center justify-center w-full h-full px-2 py-1 font-sans text-base antialiased font-normal leading-relaxed text-center cursor-pointer select-none rounded-md
                                        @if ($filter === 'pending') text-gray-900 bg-white shadow @else text-white @endif">
                                                        <div class="z-20 text-inherit">
                                                            &nbsp;&nbsp;Menunggu&nbsp;&nbsp;
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <p class="mt-2 text-xs text-gray-600">
                                                Filter notes: <br>
                                                - <strong>Semua</strong>: Menampilkan semua data warga.<br>
                                                - <strong>Disetujui</strong>: Menampilkan data dengan pendaftaran yang
                                                telah
                                                disetujui oleh pihak <strong>dinkes.</strong><br>
                                                - <strong>Ditolak</strong>: Menampilkan data yang ditolak dengan alasan
                                                penolakan. <br>
                                                - <strong>Mengunggu</strong>: Menampilkan data yang belum di proses oleh
                                                pihak <strong>dinkes.</strong>
                                            </p>
                                        </nav>
                                    </div>
                                    <form method="GET" action="{{ route('dinkes.data-warga.index') }}"
                                        class="w-full md:w-72">
                                        <div class="relative h-10 w-full min-w-[200px]">
                                            <div
                                                class="absolute grid w-5 h-5 top-2/4 right-3 -translate-y-2/4 place-items-center text-gray-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    aria-hidden="true" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <input type="text" name="search" value="{{ request('search') }}"
                                                class="peer h-full w-full rounded-[7px] border border-gray-200 border-t-transparent bg-transparent px-3 py-2.5 !pr-9 font-sans text-sm font-normal text-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-gray-200 placeholder-shown:border-t-gray-200 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-gray-50"
                                                placeholder=" " />
                                            <label
                                                class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-gray-500">
                                                Search
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="p-6 px-0  overflow-x-auto">
                                <table class="w-full mt-4 text-left table-auto min-w-max">
                                    <thead>
                                        <tr>
                                            <th
                                                class="p-4 transition-colors cursor-pointer border-y border-gray-100 bg-indigo-50 hover:bg-indigo-100">
                                                <a href="{{ route('dinkes.data-warga.index', [
                                                    'sort' => 'tanggal_data_masuk',
                                                    'direction' => $sort === 'tanggal_data_masuk' && $direction === 'asc' ? 'desc' : 'asc',
                                                    'filter' => $filter,
                                                ]) }}"
                                                    class="flex items-center justify-between gap-2 text-sm font-semibold text-gray-600 group">
                                                    <span>Tanggal Diperbarui</span>

                                                    {{-- Selalu tampilkan ikon, warnanya tergantung status --}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        class="w-4 h-4 transition duration-200">
                                                        <!-- Panah atas -->
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 15L12 18.75 15.75 15"
                                                            class="{{ $sort === 'tanggal_data_masuk' && $direction === 'asc'
                                                                ? 'stroke-blue-600 drop-shadow-[0_0_4px_rgba(59,130,246,0.7)]'
                                                                : 'stroke-gray-400' }}" />
                                                        <!-- Panah bawah -->
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 9L12 5.25 15.75 9"
                                                            class="{{ $sort === 'tanggal_data_masuk' && $direction === 'desc'
                                                                ? 'stroke-blue-600 drop-shadow-[0_0_4px_rgba(59,130,246,0.7)]'
                                                                : 'stroke-gray-400' }}" />
                                                    </svg>
                                                </a>
                                            </th>

                                            <th
                                                class="p-4 transition-colors cursor-pointer border-y border-gray-100 bg-indigo-50 hover:bg-indigo-100">
                                                <a href="{{ route('dinkes.data-warga.index', [
                                                    'sort' => 'nama',
                                                    'direction' => $sort === 'nama' && $direction === 'asc' ? 'desc' : 'asc',
                                                    'filter' => $filter,
                                                ]) }}"
                                                    class="flex items-center justify-between gap-2 text-sm font-semibold text-gray-600 group">
                                                    <span>Nama dan NIK</span>

                                                    {{-- Selalu tampilkan ikon, warnanya tergantung status --}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        class="w-4 h-4 transition duration-200">
                                                        <!-- Panah atas -->
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 15L12 18.75 15.75 15"
                                                            class="{{ $sort === 'nama' && $direction === 'asc'
                                                                ? 'stroke-blue-600 drop-shadow-[0_0_4px_rgba(59,130,246,0.7)]'
                                                                : 'stroke-gray-400' }}" />
                                                        <!-- Panah bawah -->
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 9L12 5.25 15.75 9"
                                                            class="{{ $sort === 'nama' && $direction === 'desc'
                                                                ? 'stroke-blue-600 drop-shadow-[0_0_4px_rgba(59,130,246,0.7)]'
                                                                : 'stroke-gray-400' }}" />
                                                    </svg>
                                                </a>
                                            </th>
                                            <th
                                                class="p-4 transition-colors cursor-pointer border-y border-gray-100 bg-indigo-50 hover:bg-indigo-100">
                                                <a href="{{ route('dinkes.data-warga.index', [
                                                    'sort' => 'nomor_kk',
                                                    'direction' => $sort === 'nomor_kk' && $direction === 'asc' ? 'desc' : 'asc',
                                                    'filter' => $filter,
                                                ]) }}"
                                                    class="flex items-center justify-between gap-2 text-sm font-semibold text-gray-600 group">
                                                    <span>Nomor KK</span>

                                                    {{-- Selalu tampilkan ikon, warnanya tergantung status --}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        class="w-4 h-4 transition duration-200">
                                                        <!-- Panah atas -->
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 15L12 18.75 15.75 15"
                                                            class="{{ $sort === 'nomor_kk' && $direction === 'asc'
                                                                ? 'stroke-blue-600 drop-shadow-[0_0_4px_rgba(59,130,246,0.7)]'
                                                                : 'stroke-gray-400' }}" />
                                                        <!-- Panah bawah -->
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 9L12 5.25 15.75 9"
                                                            class="{{ $sort === 'nomor_kk' && $direction === 'desc'
                                                                ? 'stroke-blue-600 drop-shadow-[0_0_4px_rgba(59,130,246,0.7)]'
                                                                : 'stroke-gray-400' }}" />
                                                    </svg>
                                                </a>
                                            </th>
                                            <th
                                                class="p-4 transition-colors cursor-pointer border-y border-gray-100 bg-indigo-50 hover:bg-indigo-100">
                                                <a href="{{ route('dinkes.data-warga.index', [
                                                    'sort' => 'tanggal_lahir',
                                                    'direction' => $sort === 'tanggal_lahir' && $direction === 'asc' ? 'desc' : 'asc',
                                                    'filter' => $filter,
                                                ]) }}"
                                                    class="flex items-center justify-between gap-2 text-sm font-semibold text-gray-600 group">
                                                    <span>Tanggal Lahir</span>

                                                    {{-- Selalu tampilkan ikon, warnanya tergantung status --}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        class="w-4 h-4 transition duration-200">
                                                        <!-- Panah atas -->
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 15L12 18.75 15.75 15"
                                                            class="{{ $sort === 'tanggal_lahir' && $direction === 'asc'
                                                                ? 'stroke-blue-600 drop-shadow-[0_0_4px_rgba(59,130,246,0.7)]'
                                                                : 'stroke-gray-400' }}" />
                                                        <!-- Panah bawah -->
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 9L12 5.25 15.75 9"
                                                            class="{{ $sort === 'tanggal_lahir' && $direction === 'desc'
                                                                ? 'stroke-blue-600 drop-shadow-[0_0_4px_rgba(59,130,246,0.7)]'
                                                                : 'stroke-gray-400' }}" />
                                                    </svg>
                                                </a>
                                            </th>
                                            <th
                                                class="p-4 transition-colors cursor-pointer border-y border-gray-100 bg-indigo-50 hover:bg-indigo-100">
                                                <a href="{{ route('dinkes.data-warga.index', [
                                                    'sort' => 'alamat_kk',
                                                    'direction' => $sort === 'alamat_kk' && $direction === 'asc' ? 'desc' : 'asc',
                                                    'filter' => $filter,
                                                ]) }}"
                                                    class="flex items-center justify-between gap-2 text-sm font-semibold text-gray-600 group">
                                                    <span>Alamat</span>

                                                    {{-- Selalu tampilkan ikon, warnanya tergantung status --}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        class="w-4 h-4 transition duration-200">
                                                        <!-- Panah atas -->
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 15L12 18.75 15.75 15"
                                                            class="{{ $sort === 'alamat_kk' && $direction === 'asc'
                                                                ? 'stroke-blue-600 drop-shadow-[0_0_4px_rgba(59,130,246,0.7)]'
                                                                : 'stroke-gray-400' }}" />
                                                        <!-- Panah bawah -->
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 9L12 5.25 15.75 9"
                                                            class="{{ $sort === 'alamat_kk' && $direction === 'desc'
                                                                ? 'stroke-blue-600 drop-shadow-[0_0_4px_rgba(59,130,246,0.7)]'
                                                                : 'stroke-gray-400' }}" />
                                                    </svg>
                                                </a>
                                            </th>
                                            <th
                                                class="p-4 transition-colors cursor-pointer border-y border-gray-100 bg-indigo-50 hover:bg-indigo-100">
                                                <a href="{{ route('dinkes.data-warga.index', [
                                                    'sort' => 'nama_puskesmas',
                                                    'direction' => $sort === 'nama_puskesmas' && $direction === 'asc' ? 'desc' : 'asc',
                                                    'filter' => $filter,
                                                ]) }}"
                                                    class="flex items-center justify-between gap-2 text-sm font-semibold text-gray-600 group">
                                                    <span>Nama Puskesmas</span>

                                                    {{-- Selalu tampilkan ikon, warnanya tergantung status --}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        class="w-4 h-4 transition duration-200">
                                                        <!-- Panah atas -->
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 15L12 18.75 15.75 15"
                                                            class="{{ $sort === 'nama_puskesmas' && $direction === 'asc'
                                                                ? 'stroke-blue-600 drop-shadow-[0_0_4px_rgba(59,130,246,0.7)]'
                                                                : 'stroke-gray-400' }}" />
                                                        <!-- Panah bawah -->
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 9L12 5.25 15.75 9"
                                                            class="{{ $sort === 'nama_puskesmas' && $direction === 'desc'
                                                                ? 'stroke-blue-600 drop-shadow-[0_0_4px_rgba(59,130,246,0.7)]'
                                                                : 'stroke-gray-400' }}" />
                                                    </svg>
                                                </a>
                                            </th>


                                            <th
                                                class="p-4 transition-colors cursor-pointer border-y border-gray-100 bg-indigo-50 hover:bg-indigo-100">
                                                <p
                                                    class="flex items-center justify-between gap-2 text-sm font-semibold text-gray-600">
                                                    Surat Domisili

                                                </p>
                                            </th>
                                            <th
                                                class="p-4 transition-colors cursor-pointer border-y border-gray-100 bg-indigo-50 hover:bg-indigo-100">
                                                <p
                                                    class="flex items-center justify-between gap-2 text-sm font-semibold text-gray-600">
                                                    Status Dukcapil

                                                </p>
                                            </th>
                                            <th
                                                class="p-4 transition-colors cursor-pointer border-y border-gray-100 bg-indigo-50 hover:bg-indigo-100">
                                                <p
                                                    class="flex items-center justify-between gap-2 text-sm font-semibold text-gray-600">
                                                    Status Dinkes

                                                </p>
                                            </th>


                                            <th
                                                class="sticky right-0 z-0 p-4 transition-colors cursor-pointer border-y border-gray-100 bg-indigo-50 hover:bg-indigo-100">
                                                <p
                                                    class="flex items-center justify-between gap-2 text-sm font-semibold text-gray-600">
                                                    Aksi

                                                </p>
                                            </th>
                                            <th
                                                class="p-4 transition-colors cursor-pointer border-y border-gray-100 bg-indigo-50 hover:bg-indigo-100">
                                                <p
                                                    class="flex items-center justify-between gap-2 text-sm font-semibold text-gray-600">
                                                </p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse ($dataWarga as $warga)
                                            <tr>
                                                <td class="p-4 border-b border-gray-100">
                                                    <p
                                                        class="block font-sans text-sm antialiased font-normal leading-normal text-gray-600">
                                                        {{ \Carbon\Carbon::parse($warga->updated_at)->format('d-m-Y') }}
                                                    </p>
                                                </td>

                                                <td class="p-4 border-b border-gray-100">
                                                    <div class="flex flex-col">
                                                        <p
                                                            class="block font-sans text-sm antialiased font-normal leading-normal text-gray-600">
                                                            {{ $warga->nama }}
                                                        </p>
                                                        <p
                                                            class="block font-sans text-sm antialiased font-normal leading-normal text-gray-600 opacity-70">
                                                            {{ $warga->nik }}
                                                        </p>

                                                    </div>
                                                </td>

                                                <td class="p-4 border-b border-gray-100">
                                                    <p
                                                        class="block font-sans text-sm antialiased font-normal leading-normal text-gray-600">
                                                        {{ $warga->nomor_kk }}
                                                    </p>
                                                </td>

                                                <td class="p-4 border-b border-gray-100">
                                                    <p
                                                        class="block font-sans text-sm antialiased font-normal leading-normal text-gray-600">
                                                        {{ \Carbon\Carbon::parse($warga->tanggal_lahir)->format('d-m-Y') }}
                                                    </p>
                                                </td>
                                                <td class="p-4 border-b border-gray-100">
                                                    <div class="flex flex-col">
                                                        <p
                                                            class="w-40 truncate block font-sans text-sm antialiased font-normal leading-normal text-gray-600">
                                                            {{ $warga->alamat_kk }}
                                                        </p>
                                                        <p
                                                            class="w-40 truncate block font-sans text-sm antialiased font-normal leading-normal text-gray-600 opacity-70">
                                                            Kel.{{ $warga->nama_kelurahan }}
                                                        </p>
                                                        <p
                                                            class="w-40 truncate block font-sans text-sm antialiased font-normal leading-normal text-gray-600 opacity-70">
                                                            Kec.{{ $warga->kecamatan }}
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="p-4 border-b border-gray-100">
                                                    <p
                                                        class="block font-sans text-sm antialiased font-normal leading-normal text-gray-600">
                                                        {{ $warga->nama_puskesmas }}
                                                    </p>
                                                </td>


                                                <td class="p-4 border-b border-gray-100">
                                                    <div class="w-max">
                                                        @if ($warga->alasan_penolakan_kelurahan)
                                                            <!-- Jika ada alasan penolakan -->
                                                            <div
                                                                class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-red-900 uppercase rounded-md select-none whitespace-nowrap bg-red-500/20">
                                                                <span>Ditolak</span>
                                                            </div>
                                                        @elseif ($warga->surat_keterangan_domisili)
                                                            <!-- Jika surat Disetujui -->
                                                            <div
                                                                class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-green-900 uppercase rounded-md select-none whitespace-nowrap bg-green-500/20">
                                                                <span>Disetujui</span>
                                                            </div>
                                                        @else
                                                            <!-- Jika belum Disetujui dan belum ditolak -->
                                                            <div
                                                                class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-gray-900 uppercase rounded-md select-none whitespace-nowrap bg-gray-500/20">
                                                                <span>Belum Diterima</span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </td>

                                                <td class="p-4 border-b border-gray-100">
                                                    <div class="w-max">
                                                        @if (is_null($warga->status_approve_dukcapil) || $warga->status_approve_dukcapil === 'pending')
                                                            <div
                                                                class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-gray-900 uppercase rounded-md select-none whitespace-nowrap bg-gray-500/20">
                                                                <span class="">Menunggu</span>
                                                            </div>
                                                        @elseif ($warga->status_approve_dukcapil === 'approved')
                                                            <div
                                                                class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-green-900 uppercase rounded-md select-none whitespace-nowrap bg-green-500/20">
                                                                <span class="">Disetujui</span>
                                                            </div>
                                                        @else
                                                            <div
                                                                class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-red-900 uppercase rounded-md select-none whitespace-nowrap bg-red-500/20">
                                                                <span class="">Ditolak</span>
                                                            </div>
                                                        @endif

                                                    </div>
                                                </td>
                                                <td class="p-4 border-b border-gray-100">
                                                    <div class="w-max">
                                                        @if (is_null($warga->status_approve_dinkes) || $warga->status_approve_dinkes === 'pending')
                                                            <div
                                                                class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-gray-900 uppercase rounded-md select-none whitespace-nowrap bg-gray-500/20">
                                                                <span class="">Menunggu</span>
                                                            </div>
                                                        @elseif ($warga->status_approve_dinkes === 'approved')
                                                            <div
                                                                class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-green-900 uppercase rounded-md select-none whitespace-nowrap bg-green-500/20">
                                                                <span class="">Disetujui</span>
                                                            </div>
                                                        @else
                                                            <div
                                                                class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-red-900 uppercase rounded-md select-none whitespace-nowrap bg-red-500/20">
                                                                <span class="">Ditolak</span>
                                                            </div>
                                                        @endif

                                                    </div>
                                                </td>



                                                <td
                                                    class="sticky right-0 bg-white z-0 p-4 transition-colors cursor-pointer border-y border-gray-100 ">
                                                    <!-- Tombol Buka Modal -->
                                                    <button onclick="openMultiStepModal({{ $warga->id }})"
                                                        class="relative h-10 w-10 rounded-lg text-center text-xs font-medium uppercase text-green-800 transition-all hover:bg-gray-800/10">
                                                        <span
                                                            class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="h-5">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                                                            </svg>

                                                        </span>
                                                    </button>

                                                    <!-- Modal Multi Step -->
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
                                                                    $isPdfKtp = Str::endsWith(
                                                                        strtolower($warga->foto_ktp),
                                                                        '.pdf',
                                                                    );
                                                                @endphp

                                                                @if ($warga->foto_ktp && file_exists($path))
                                                                    @if ($isPdfKtp)
                                                                        <div class="py-6 text-center">
                                                                            <iframe
                                                                                src="{{ asset('storage/' . $warga->foto_ktp) }}"
                                                                                class="w-full h-96 border rounded-xl"></iframe>
                                                                            <p class="mt-2 text-sm text-gray-600">Data milik - {{ $warga->nama }}
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
                                                                                    {{ \Carbon\Carbon::parse($warga->tanggal_lahir)->format('d-m-Y') }}</p>
                                                                            </div>
                                                                        </div>

                                                                        {{-- Alamat Lengkap --}}
                                                                        <div class="">
                                                                            <p class="text-gray-500 mb-1">Alamat</p>
                                                                            <p class="font-medium">
                                                                                {{ $warga->alamat_kk }}</p>
                                                                        </div>

                                                                        {{-- dinkes & Kecamatan --}}
                                                                        <div
                                                                            class="flex flex-col md:flex-row md:justify-between md:space-x-4 ">
                                                                            <div class="flex-1">
                                                                                <p class="text-gray-500 mb-1">kelurahan
                                                                                </p>
                                                                                <p class="font-medium">
                                                                                    {{ $warga->nama_kelurahan }}
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="flex-1 mt-4 md:mt-0 rounded-md border-2 border-gray-200 bg-gray-50 p-2">
                                                                                <p class="text-gray-500 mb-1">Surat
                                                                                    Domisili akan Dikeluarkan Oleh
                                                                                </p>
                                                                                <p class="font-medium">
                                                                                    {{ $warga->targetdinkes?->name ?? '-' }}
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
                                                                    $isPdfKk = Str::endsWith(
                                                                        strtolower($warga->foto_kk),
                                                                        '.pdf',
                                                                    );
                                                                @endphp

                                                                @if ($warga->foto_kk && file_exists($path))
                                                                    @if ($isPdfKk)
                                                                        <div class="py-6 text-center">
                                                                            <iframe
                                                                                src="{{ asset('storage/' . $warga->foto_kk) }}"
                                                                                class="w-full h-96 border rounded-xl"></iframe>
                                                                            <p class="mt-2 text-sm text-gray-600">Data milik - {{ $warga->nama }}
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
                                                                    $isPdfSakit = Str::endsWith(
                                                                        strtolower($warga->surat_keterangan_sakit),
                                                                        '.pdf',
                                                                    );
                                                                @endphp

                                                                @if ($warga->surat_keterangan_sakit && file_exists($path))
                                                                    @if ($isPdfSakit)
                                                                        <div class="py-6 text-center">
                                                                            <iframe
                                                                                src="{{ asset('storage/' . $warga->surat_keterangan_sakit) }}"
                                                                                class="w-full h-96 border rounded-xl"></iframe>
                                                                            <p class="mt-2 text-sm text-gray-600">Data milik - {{ $warga->nama }}
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
                                                                    $isPdfDomisili = Str::endsWith(
                                                                        strtolower($warga->surat_keterangan_domisili),
                                                                        '.pdf',
                                                                    );
                                                                @endphp

                                                                @if ($warga->surat_keterangan_domisili && file_exists($path))
                                                                    {{-- Cek apakah surat ditolak --}}
                                                                    @if ($warga->alasan_penolakan_kelurahan)
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
                                                                                        Catatan Penolakan kelurahan</h3>

                                                                                    <!-- Isi Catatan -->
                                                                                    <p
                                                                                        class="text-gray-700 text-sm leading-relaxed px-2">
                                                                                        {{ $warga->alasan_penolakan_kelurahan }}
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @else
                                                                        {{-- Tampilan untuk surat Disetujui --}}
                                                                        @if ($isPdfDomisili)
                                                                            <div class="py-6 text-center">
                                                                                <iframe
                                                                                    src="{{ asset('storage/' . $warga->surat_keterangan_domisili) }}"
                                                                                    class="w-full h-96 border rounded-xl"></iframe>
                                                                                <p class="mt-2 text-sm text-gray-600">
                                                                                    Data milik -
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
                                                                {{-- penolakan dinkes --}}
                                                                @if ($warga->alasan_penolakan_dukcapil)
                                                                    <div
                                                                        class="p-1 border-t-2 border-dashed border-gray-200">
                                                                    </div>
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
                                                                                    Catatan Penolakan dinkes
                                                                                </h3>

                                                                                <!-- Isi Catatan -->
                                                                                <p
                                                                                    class="text-gray-700 text-sm leading-relaxed px-2">
                                                                                    {{ $warga->alasan_penolakan_dukcapil }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif





                                                                {{-- penolakan dinkes --}}
                                                                @if ($warga->alasan_penolakan_dinkes)
                                                                    <div
                                                                        class="p-1 border-t-2 border-dashed border-gray-200">
                                                                    </div>
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
                                                                                    Catatan Penolakan dinkes
                                                                                </h3>

                                                                                <!-- Isi Catatan -->
                                                                                <p
                                                                                    class="text-gray-700 text-sm leading-relaxed px-2">
                                                                                    {{ $warga->alasan_penolakan_dinkes }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif


                                                                <div class="mt-6 flex justify-between items-center">
                                                                    <!-- Grup kiri: Tolak & Terima -->
                                                                    <div class="flex gap-2">
                                                                        <!-- Tombol approve -->
                                                                        @if ($warga->status_approve_dinkes !== 'approved')
                                                                            <form
                                                                                action="{{ route('dinkes.data-warga.approve', $warga->id) }}"
                                                                                method="POST" class="inline">
                                                                                @csrf
                                                                                @method('PATCH')
                                                                                <input type="hidden" name="action"
                                                                                    value="approve">
                                                                                <button type="submit"
                                                                                    class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded">
                                                                                    Approve
                                                                                </button>
                                                                            </form>
                                                                            <!-- Tombol buka modal -->
                                                                            <button type="button"
                                                                                onclick="document.getElementById('modal-tolak-{{ $warga->id }}').classList.remove('hidden')"
                                                                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                                                                                Tolak
                                                                            </button>
                                                                        @endif
                                                                    </div>

                                                                    <!-- Grup kanan: Tutup -->
                                                                    <div>
                                                                        <button type="button"
                                                                            onclick="closeAllModals({{ $warga->id }})"
                                                                            class="text-gray-700 bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded-md transition">
                                                                            Tutup
                                                                        </button>
                                                                    </div>
                                                                </div>


                                                            </div>

                                                            <!-- Step 2 -->

                                                        </div>
                                                    </div>

                                                    <!-- Modal Tolak -->
                                                    <div id="modal-tolak-{{ $warga->id }}"
                                                        class="modal-container hidden">
                                                        <form method="POST"
                                                            action="{{ route('dinkes.data-warga.approve', $warga->id) }}"
                                                            class="modal-box">
                                                            @csrf
                                                            @method('PATCH')
                                                            <input type="hidden" name="action" value="reject">
                                                            <div
                                                                class="absolute top-0 left-1/2 -translate-x-1/2 w-48 h-20 bg-gradient-to-b from-blue-400/60 to-transparent blur-2xl opacity-90 z-10">
                                                            </div>

                                                            <div class="text-center">
                                                                <h2 class="text-xl font-semibold text-red-600">Alasan
                                                                    Penolakan
                                                                </h2>
                                                                <p class="text-sm text-gray-500">Alasan Penolakan Surat
                                                                    Keterangan Domisili Peserta BPJS Gratis.</p>
                                                            </div>

                                                            <div class="my-6">
                                                                <textarea name="alasan_penolakan_dinkes" required placeholder="Masukkan alasan penolakan..."
                                                                    class="w-full px-4 py-3 text-sm text-gray-700 placeholder-gray-400 border-dashed border-gray-300 bg-gray-50 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-y min-h-[120px]"></textarea>
                                                            </div>

                                                            <div class="mt-6 flex justify-end gap-2">
                                                                <button type="button"
                                                                    onclick="closeAllModals({{ $warga->id }})"
                                                                    class="btn-cancel">Batal</button>
                                                                <button type="submit"
                                                                    class="btn-decline">Kirim</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="13" class="text-center text-gray-500 p-4">Tidak ada
                                                    data warga.</td>
                                            </tr>
                                        @endforelse





                                    </tbody>
                                </table>
                            </div>
                            <div class="flex items-center justify-between p-4 border-t border-gray-100">
                                <p class="text-sm text-gray-600">
                                    Page {{ $dataWarga->currentPage() }} of {{ $dataWarga->lastPage() }}
                                </p>

                                <div class="flex gap-2">
                                    {{-- Tombol Previous --}}
                                    <a href="{{ $dataWarga->previousPageUrl() }}"
                                        class="rounded-lg border border-gray-900 py-2 px-4 text-xs font-bold uppercase text-gray-600 transition-all hover:opacity-75 focus:ring focus:ring-gray-300 active:opacity-85 {{ $dataWarga->onFirstPage() ? 'pointer-events-none opacity-50' : '' }}">
                                        Previous
                                    </a>

                                    {{-- Tombol Next --}}
                                    <a href="{{ $dataWarga->nextPageUrl() }}"
                                        class="rounded-lg border border-gray-900 py-2 px-4 text-xs font-bold uppercase text-gray-600 transition-all hover:opacity-75 focus:ring focus:ring-gray-300 active:opacity-85 {{ !$dataWarga->hasMorePages() ? 'pointer-events-none opacity-50' : '' }}">
                                        Next
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


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
