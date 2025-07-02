<x-app-layout>

    <div class="mt-10">
        <div class="relative pt-10 mt-24">
            {{-- Background merah hanya sampai tengah-tengah card --}}
            <div
                class=" absolute top-0 left-0 w-full h-[120px] z-0 bg-[url('https://i.pinimg.com/736x/d6/14/25/d6142570c6938139f62802d7cc94b49d.jpg')] bg-cover rounded-xl">
            </div>

            <div class="relative px-6 max-w-8xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">




                        <div>
                            <div>
                                <div class="flex items-center justify-between gap-8 mb-8">
                                    <div>
                                        <h5
                                            class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-gray-900">
                                            Daftar Pengguna
                                        </h5>
                                        <p
                                            class="block mt-1 font-sans text-base antialiased font-normal leading-relaxed text-gray-500">
                                            Lihat informasi lebih lanjut tentang pengguna yang terdaftar di sistem.
                                        </p>


                                    </div>
                                    <div class="flex flex-col gap-2 shrink-0 sm:flex-row">
                                       
                                        <button onclick="openCreateModal()"
                                            class="flex select-none items-center gap-3 rounded-lg bg-gray-900 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-4 h-4">
                                                <path fill-rule="evenodd"
                                                    d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 0 0 3 3h.27l-.155 1.705A1.875 1.875 0 0 0 7.232 22.5h9.536a1.875 1.875 0 0 0 1.867-2.045l-.155-1.705h.27a3 3 0 0 0 3-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0 0 18 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM16.5 6.205v-2.83A.375.375 0 0 0 16.125 3h-8.25a.375.375 0 0 0-.375.375v2.83a49.353 49.353 0 0 1 9 0Zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 0 1-.374.409H7.232a.375.375 0 0 1-.374-.409l.526-5.784a.373.373 0 0 1 .333-.337 41.741 41.741 0 0 1 8.566 0Zm.967-3.97a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H18a.75.75 0 0 1-.75-.75V10.5ZM15 9.75a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V10.5a.75.75 0 0 0-.75-.75H15Z"
                                                    clip-rule="evenodd" />
                                            </svg>


                                            Tambah Data
                                        </button>
                                        <div id="modal-create-multistep"class="modal-container hidden">
                                            <div class="modal-box">
                                                <button onclick="closeCreateModal()"
                                                    class="absolute top-4 right-4 text-2xl text-gray-500 bg-transparent border-none cursor-pointer transition-colors duration-300 hover:text-black">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="size-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                    </svg>
                                                </button>
                                                <form action="{{ route('users.store') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    {{-- step 1 --}}
                                                    <div class="step space-y-4" data-step="1">
                                                        <div
                                                            class="absolute top-0 left-1/2 -translate-x-1/2 w-48 h-20 bg-gradient-to-b from-blue-400/60 to-transparent blur-2xl opacity-90 z-10">
                                                        </div>
                                                        <div class="text-center">
                                                            <h2 class="text-xl font-semibold text-gray-800">Tambah Users
                                                            </h2>
                                                            <p class="text-sm text-gray-500">Informasi lengkap mengenai
                                                                user yang terdaftar.</p>
                                                        </div>



                                                        <div id="existing-profile-preview"
                                                            class="hidden mb-4 text-center">
                                                            <p class="text-sm text-gray-500 mb-2">Foto profile saat ini:
                                                            </p>
                                                            <div id="existing-profile-preview-container"
                                                                class="mx-auto w-full h-full"></div>
                                                        </div>


                                                        <div id="profile-notification"
                                                            class="hidden mb-4 flex items-center justify-center gap-2 text-sm text-red-700 font-medium bg-red-100 border border-red-300 rounded-lg px-4 py-2 shadow-sm">
                                                            <svg class="w-5 h-5 text-red-600" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M12 9v2m0 4h.01M4.93 4.93l14.14 14.14M6.343 17.657l-1.414-1.414M18.364 5.636l-1.414 1.414" />
                                                            </svg>
                                                            <span>Foto profile tidak tersedia. Harap unggah terlebih
                                                                dahulu.</span>
                                                        </div>


                                                        <label for="profile"
                                                            class="my-6 block w-full cursor-pointer border-2 border-dashed border-blue-300 rounded-xl bg-blue-50 hover:bg-blue-100 transition duration-200 p-4 text-center">
                                                            <div
                                                                class="flex flex-col items-center justify-center space-y-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor"
                                                                    class="w-10 h-10 text-blue-500">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                                                                </svg>

                                                                <p class="text-sm text-blue-600 font-medium">Klik
                                                                    untuk unggah Foto profile</p>
                                                                <p class="text-xs text-blue-400">Hanya file dengan
                                                                    Format
                                                                    (JPG, PNG, JPEG, PDF)
                                                                </p>
                                                            </div>
                                                            <input type="file" name="profile" id="profile"
                                                                accept="image/*,application/pdf" class="hidden"
                                                                onchange="previewImage(event, 'preview-profile')" />
                                                        </label>



                                                        <!-- Tempat Preview -->
                                                        <div id="preview-container" class="mt-4 text-center hidden">
                                                            <!-- Preview Image -->
                                                            <img id="preview-img" src="#" alt="Preview"
                                                                class="mx-auto h-40 object-contain rounded-lg shadow-md hidden transition-transform duration-300 ease-in-out hover:scale-105" />
                                                            <!-- Preview PDF -->
                                                            <iframe id="preview-pdf" src="#"
                                                                class="mx-auto w-full max-w-sm h-48 border rounded-lg shadow-md hidden"></iframe>
                                                        </div>
                                                        <div class="my-6 py-6 border-t-2 border-dashed border-gray-200">
                                                            <div class="mb-6">
                                                                <label
                                                                    class="block text-sm font-medium text-gray-700 mb-1">Nama
                                                                </label>
                                                                <input type="text" name="name"
                                                                    class="w-full px-4 py-2 border bg-gray-50 border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                                                                    required>
                                                            </div>
                                                            <div class="mb-6">
                                                                <label for="role"
                                                                    class="block text-sm font-medium text-blue-700 mb-1">
                                                                    Role
                                                                </label>
                                                                <div class="relative">
                                                                    <select name="role" id="role" required
                                                                        class="w-full appearance-none  bg-gray-50 text-gray-600 border text-sm border-gray-300 rounded-xl py-2 px-4 pr-10 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                                                                        <option value="" disabled selected
                                                                            class="text-gray-400">
                                                                            -- Pilih Role Tujuan --
                                                                        </option>
                                                                        @foreach ($roles as $role)
                                                                            <option value="{{ $role }}">
                                                                                {{ ucfirst($role) }}

                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    <div
                                                                        class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-gray-400">
                                                                        <!-- Icon panah bawaan dropdown -->
                                                                        <svg class="w-4 h-4" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            viewBox="0 0 24 24">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                d="M19 9l-7 7-7-7" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mb-6">
                                                                <label
                                                                    class="block text-sm font-medium text-gray-700 mb-1">Alamat
                                                                    Sesuai KK</label>
                                                                <textarea name="alamat" rows="2"
                                                                    class="w-full px-4 py-2 border bg-gray-50 border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                                                                    required></textarea>
                                                            </div>
                                                            <!-- Grid kolom 2 -->
                                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                                                <div>
                                                                    <label
                                                                        class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                                                    <input type="email" name="email"
                                                                        class="w-full px-4 py-2 border bg-gray-50 border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                                                                        required>
                                                                </div>
                                                                <div>
                                                                    <label
                                                                        class="block text-sm font-medium text-gray-700 mb-1">password</label>
                                                                    <input type="password" name="password"
                                                                        class="w-full px-4 py-2 border bg-gray-50 border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                                                                        required>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="mt-6 flex justify-between gap-2">
                                                            <button type="submit"
                                                                class="flex items-center gap-1 text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-md transition">Save
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-5 h-5">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                                                </svg>

                                                            </button>
                                                        </div>

                                                    </div>
                                                </form>
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
                                                    <a href="{{ route('users.index', ['filter' => 'all']) }}"
                                                        class="relative flex items-center justify-center w-full h-full px-2 py-1 font-sans text-base antialiased font-normal leading-relaxed text-center cursor-pointer select-none rounded-md
                                        @if (request('filter') === 'all' || request('filter') === null) text-gray-900 bg-white shadow @else text-white @endif">
                                                        <div class="z-20 text-inherit">
                                                            &nbsp;&nbsp;Semua&nbsp;&nbsp;
                                                        </div>
                                                    </a>
                                                </li>
                                                <li role="tab">
                                                    <a href="{{ route('users.index', ['filter' => 'puskesmas']) }}"
                                                        class="relative flex items-center justify-center w-full h-full px-2 py-1 font-sans text-base antialiased font-normal leading-relaxed text-center cursor-pointer select-none rounded-md
                                        @if (request('filter') === 'puskesmas') text-gray-900 bg-white shadow @else text-white @endif">
                                                        <div class="z-20 text-inherit">
                                                            &nbsp;&nbsp;Puskesmas&nbsp;&nbsp;
                                                        </div>
                                                    </a>
                                                </li>
                                                <li role="tab">
                                                    <a href="{{ route('users.index', ['filter' => 'kelurahan']) }}"
                                                        class="relative flex items-center justify-center w-full h-full px-2 py-1 font-sans text-base antialiased font-normal leading-relaxed text-center cursor-pointer select-none rounded-md
                                        @if (request('filter') === 'kelurahan') text-gray-900 bg-white shadow @else text-white @endif">
                                                        <div class="z-20 text-inherit">
                                                            &nbsp;&nbsp;Kelurahan&nbsp;&nbsp;
                                                        </div>
                                                    </a>
                                                </li>
                                                <li role="tab">
                                                    <a href="{{ route('users.index', ['filter' => 'dukcapil']) }}"
                                                        class="relative flex items-center justify-center w-full h-full px-2 py-1 font-sans text-base antialiased font-normal leading-relaxed text-center cursor-pointer select-none rounded-md
                                        @if (request('filter') === 'dukcapil') text-gray-900 bg-white shadow @else text-white @endif">
                                                        <div class="z-20 text-inherit">
                                                            &nbsp;&nbsp;Dukcapil&nbsp;&nbsp;
                                                        </div>
                                                    </a>
                                                </li>
                                                <li role="tab">
                                                    <a href="{{ route('users.index', ['filter' => 'dinkes']) }}"
                                                        class="relative flex items-center justify-center w-full h-full px-2 py-1 font-sans text-base antialiased font-normal leading-relaxed text-center cursor-pointer select-none rounded-md
                                        @if (request('filter') === 'dinkes') text-gray-900 bg-white shadow @else text-white @endif">
                                                        <div class="z-20 text-inherit">
                                                            &nbsp;&nbsp;Dinkes&nbsp;&nbsp;
                                                        </div>
                                                    </a>
                                                </li>
                                                <li role="tab">
                                                    <a href="{{ route('users.index', ['filter' => 'rsud']) }}"
                                                        class="relative flex items-center justify-center w-full h-full px-2 py-1 font-sans text-base antialiased font-normal leading-relaxed text-center cursor-pointer select-none rounded-md
                                        @if (request('filter') === 'rsud') text-gray-900 bg-white shadow @else text-white @endif">
                                                        <div class="z-20 text-inherit">
                                                            &nbsp;&nbsp;RSUD&nbsp;&nbsp;
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <p class="mt-2 text-xs text-gray-600">
                                                Filter notes: <br>
                                                - <strong>Semua</strong>: Menampilkan semua data user.<br>
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
                                    <form method="GET" action="{{ route('users.index') }}">
                                        <div class="w-full md:w-72">
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

                                                <input type="text" name="search" placeholder=""
                                                    value="{{ request('search') }}"
                                                    class="peer h-full w-full rounded-[7px] border border-gray-200 border-t-transparent bg-transparent px-3 py-2.5 !pr-9 font-sans text-sm font-normal text-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-gray-200 placeholder-shown:border-t-gray-200 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-gray-50" />
                                                <label
                                                    class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-gray-500">
                                                    Search
                                                </label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div>
                                <table class="w-full mt-4 text-left table-auto min-w-max">
                                    <thead>
                                        <tr>
                                            <th
                                                class="p-4 transition-colors cursor-pointer border-y border-gray-100 bg-indigo-50 hover:bg-indigo-100">
                                                <a href="{{ route('users.index', [
                                                    'sort' => 'name',
                                                    'direction' => $sort === 'name' && $direction === 'asc' ? 'desc' : 'asc',
                                                    'filter' => $filter,
                                                ]) }}"
                                                    class="flex items-center justify-between gap-2 text-sm font-semibold text-gray-600 group">
                                                    <span>User</span>

                                                    {{-- Selalu tampilkan ikon, warnanya tergantung status --}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        class="w-4 h-4 transition duration-200">
                                                        <!-- Panah atas -->
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 15L12 18.75 15.75 15"
                                                            class="{{ $sort === 'name' && $direction === 'asc'
                                                                ? 'stroke-blue-600 drop-shadow-[0_0_4px_rgba(59,130,246,0.7)]'
                                                                : 'stroke-gray-400' }}" />
                                                        <!-- Panah bawah -->
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 9L12 5.25 15.75 9"
                                                            class="{{ $sort === 'name' && $direction === 'desc'
                                                                ? 'stroke-blue-600 drop-shadow-[0_0_4px_rgba(59,130,246,0.7)]'
                                                                : 'stroke-gray-400' }}" />
                                                    </svg>
                                                </a>
                                            </th>
                                            <th
                                                class="p-4 transition-colors cursor-pointer border-y border-gray-100 bg-indigo-50 hover:bg-indigo-100">
                                                <p
                                                    class="flex items-center justify-between gap-2 text-sm font-semibold text-gray-600">
                                                    Role

                                                </p>
                                            </th>
                                            <th
                                                class="p-4 transition-colors cursor-pointer border-y border-gray-100 bg-indigo-50 hover:bg-indigo-100">
                                                <a href="{{ route('users.index', [
                                                    'sort' => 'alamat',
                                                    'direction' => $sort === 'alamat' && $direction === 'asc' ? 'desc' : 'asc',
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
                                                            class="{{ $sort === 'alamat' && $direction === 'asc'
                                                                ? 'stroke-blue-600 drop-shadow-[0_0_4px_rgba(59,130,246,0.7)]'
                                                                : 'stroke-gray-400' }}" />
                                                        <!-- Panah bawah -->
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 9L12 5.25 15.75 9"
                                                            class="{{ $sort === 'alamat' && $direction === 'desc'
                                                                ? 'stroke-blue-600 drop-shadow-[0_0_4px_rgba(59,130,246,0.7)]'
                                                                : 'stroke-gray-400' }}" />
                                                    </svg>
                                                </a>
                                            </th>
                                            <th
                                                class="p-4 transition-colors cursor-pointer border-y border-gray-100 bg-indigo-50 hover:bg-indigo-100">
                                                <p
                                                    class="flex items-center justify-between gap-2 text-sm font-semibold text-gray-600">
                                                    Dibuat Oleh
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
                                        @foreach ($users as $user)
                                            <tr>
                                                <td class="p-4 border-b border-gray-100">
                                                    <div class="flex items-center gap-3">
                                                        <img src="{{ $user->profile ? asset('storage/' . $user->profile) : 'https://i.pinimg.com/736x/1a/a8/d7/1aa8d75f3498784bcd2617b3e3d1e0c4.jpg' }}"
                                                            alt="Foto Profil"
                                                            class="relative inline-block h-9 w-9 !rounded-full object-cover object-center">
                                                        <div class="flex flex-col">
                                                            <p
                                                                class="block font-sans text-sm antialiased font-normal leading-normal text-gray-700">
                                                                {{ $user->name }}
                                                            </p>
                                                            <p
                                                                class="block font-sans text-sm antialiased font-normal leading-normal text-gray-700 opacity-70">
                                                                {{ $user->email }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-4 border-b border-gray-100">
                                                    <p
                                                        class="block font-sans text-sm antialiased font-normal leading-normal text-gray-700">
                                                        {{ ucfirst($user->role) }}
                                                    </p>
                                                </td>
                                                <td class="p-4 border-b border-gray-100">
                                                    <p
                                                        class="block font-sans text-sm antialiased font-normal leading-normal text-gray-700">
                                                        {{ $user->alamat }}
                                                    </p>
                                                </td>

                                                <td class="p-4 border-b border-gray-100">
                                                    <p
                                                        class="block font-sans text-sm antialiased font-normal leading-normal text-gray-700">
                                                        {{ $user->creator->name ?? '-' }}
                                                    </p>
                                                </td>
                                                <td
                                                    class="sticky flex p-8 border-b border-gray-100 right-0 z-0">





                                                    <div class="relative inline-block justify-between items-center">
                                                        <!-- Tombol Dropdown Trigger -->
                                                        <button onclick="toggleDropdown(this)"
                                                            class="rounded hover:bg-gray-200 focus:outline-none">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                                            </svg>
                                                        </button>

                                                        <!-- Dropdown Menu -->
                                                        <div
                                                            class="hidden absolute right-0 mt-2 bottom-full w-48 bg-white border border-gray-200 rounded shadow-md z-[90] dropdown-menu">
                                                            <!-- Tombol Edit -->

@php
                                                                $isPdfprofile = Str::endsWith(
                                                                    strtolower($user->profile),
                                                                    '.pdf',
                                                                );
                                                                
                                                            @endphp
                                                            <button
                                                                class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 btn-edit"
                                                                data-id="{{ $user->id }}"
                                                                data-name="{{ $user->name }}"
                                                                data-email="{{ $user->email }}"
                                                                data-alamat="{{ $user->alamat }}"
                                                                data-password="{{ $user->password }}"
                                                                data-role="{{ $user->role }}"
                                                                data-foto_profile_url="{{ $user->foto_profile ? asset('storage/' . $user->profile) : '' }}"
                                                                data-is_pdf_profile="{{ $isPdfprofile ? 'true' : 'false' }}"
                                                                onclick="handleEditClick(this)">
                                                                Edit
                                                            </button>
                                                            


                                                            <!-- Tombol Hapus -->
                                                            <button onclick="openDeleteModal({{ $user->id }})"
                                                                class="w-full text-left px-4 py-2 text-sm text-red-700 hover:bg-red-100">
                                                                Hapus
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <script>
                                                        function toggleDropdown(button) {
                                                            const dropdown = button.parentElement.querySelector('.dropdown-menu');
                                                            dropdown.classList.toggle('hidden');

                                                            // Tutup dropdown jika klik di luar
                                                            document.addEventListener('click', function handleOutsideClick(e) {
                                                                if (!button.contains(e.target) && !dropdown.contains(e.target)) {
                                                                    dropdown.classList.add('hidden');
                                                                    document.removeEventListener('click', handleOutsideClick);
                                                                }
                                                            });
                                                        }

                                                        function openDeleteModal(userId) {
                                                            const modal = document.getElementById(`modal-delete-${userId}`);
                                                            if (modal) {
                                                                modal.classList.remove('hidden');
                                                                document.body.classList.add('modal-open');
                                                            }
                                                        }

                                                        function closeDeleteModal(userId) {
                                                            const modal = document.getElementById(`modal-delete-${userId}`);
                                                            if (modal) {
                                                                modal.classList.add('hidden');
                                                                document.body.classList.remove('modal-open');
                                                            }
                                                        }
                                                    </script>









                                                    <div id="modal-delete-{{ $user->id }}"
                                                        class="modal-container hidden fixed inset-0 z-[9999] items-center justify-center bg-black/40">
                                                        <div
                                                            class="modal-box bg-white p-6 rounded-xl relative max-w-sm w-full">
                                                            <button onclick="closeDeleteModal({{ $user->id }})"
                                                                class="absolute top-4 right-4 text-2xl text-gray-500 hover:text-black transition-colors">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="size-6">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                                </svg>
                                                            </button>

                                                            <!-- Konten Modal -->
                                                            <div class="text-center">
                                                                <h2 class="text-lg font-semibold text-gray-800 mb-2">
                                                                    Konfirmasi
                                                                    delete</h2>
                                                                <p class="text-sm text-gray-500 mb-6">Apakah Anda yakin
                                                                    ingin
                                                                    menghapus <span
                                                                        class="bg-gray-100 rounded-md p-2 text-red-600">{{ $user->name }}</span>
                                                                    ini?</p>
                                                                <p></p>
                                                                <!-- Tombol Aksi -->
                                                                <div class="flex justify-center gap-4">
                                                                    <form method="POST"
                                                                        action="{{ route('users.destroy', $user->id) }}">
                                                                        @csrf @method('DELETE')
                                                                        <input type="hidden" name="_token"
                                                                            value="{{ csrf_token() }}">
                                                                        <button
                                                                            class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Ya,
                                                                            delete</button>
                                                                    </form>
                                                                    <button
                                                                        onclick="closeDeleteModal({{ $user->id }})"
                                                                        class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">Batal</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="flex items-center justify-between p-4 border-t border-gray-100">
                                <p class="text-sm text-gray-600">
                                    Page {{ $users->currentPage() }} of {{ $users->lastPage() }}
                                </p>

                                <div class="flex gap-2">
                                    {{-- Tombol Previous --}}
                                    <a href="{{ $users->previousPageUrl() }}"
                                        class="rounded-lg border border-gray-900 py-2 px-4 text-xs font-bold uppercase text-gray-600 transition-all hover:opacity-75 focus:ring focus:ring-gray-300 active:opacity-85 {{ $users->onFirstPage() ? 'pointer-events-none opacity-50' : '' }}">
                                        Previous
                                    </a>

                                    {{-- Tombol Next --}}
                                    <a href="{{ $users->nextPageUrl() }}"
                                        class="rounded-lg border border-gray-900 py-2 px-4 text-xs font-bold uppercase text-gray-600 transition-all hover:opacity-75 focus:ring focus:ring-gray-300 active:opacity-85 {{ !$users->hasMorePages() ? 'pointer-events-none opacity-50' : '' }}">
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





    <script>
        let modalMode = 'create'; // default

        function openCreateModal() {
            modalMode = 'create';
            clearForm();
            updateFormAttributes('create');
            document.getElementById('modal-create-multistep').classList.remove('hidden');
            document.getElementById('existing-profile-preview')?.classList.add('hidden');
        }

        function closeCreateModal() {
            document.body.classList.remove('modal-open');
            document.getElementById('modal-create-multistep')?.classList.add('hidden');
        }

        function clearForm() {
            const form = document.querySelector('#modal-create-multistep form');
            form.reset();
            document.querySelectorAll('#modal-create-multistep img').forEach(img => {
                img.classList.add('hidden');
            });
        }

        function updateFormAttributes(mode, id = null) {
            const form = document.querySelector('#modal-create-multistep form');
            if (mode === 'create') {
                form.action = "{{ route('users.store') }}";
                form.querySelector('input[name="_method"]')?.remove();
            } else if (mode === 'edit') {
                form.action = `/dinkes/users/${id}`; // Sesuaikan dengan route update
                if (!form.querySelector('input[name="_method"]')) {
                    const methodInput = document.createElement('input');
                    methodInput.type = 'hidden';
                    methodInput.name = '_method';
                    methodInput.value = 'PUT';
                    form.appendChild(methodInput);
                } else {
                    form.querySelector('input[name="_method"]').value = 'PUT';
                }
            }
        }
        function clearForm() {
                                                const form = document.querySelector('#modal-create-multistep form');
                                                form.reset();
                                                document.querySelectorAll('#modal-create-multistep img').forEach(img => {
                                                    img.classList.add('hidden');
                                                });
                                            }
        function handleEditClick(button) {
            const data = {
                id: button.dataset.id,
                name: button.dataset.name,
                email: button.dataset.email,
                password: button.dataset.password,
                role: button.dataset.role,
                alamat: button.dataset.alamat || '',

                foto_profile_url: button.dataset.foto_profile_url || '',
                is_pdf_profile: button.dataset.is_pdf_profile === "true",
            };
            openEditModal(data);
        }

        function openEditModal(data) {
            modalMode = 'edit';
            updateFormAttributes('edit', data.id);
            const form = document.querySelector('#modal-create-multistep form');

            // Populate form fields
            form.querySelector('input[name="name"]').value = data.name || '';
            form.querySelector('input[name="email"]').value = data.email || '';
            form.querySelector('input[name="password"]').value = '';
            form.querySelector('select[name="role"]').value = data.role || '';
            form.querySelector('textarea[name="alamat"]').value = data.alamat || '';

            // Profile preview handling
            const imgPreview = document.getElementById('preview-img');
            const pdfPreview = document.getElementById('preview-pdf');
            if (data.is_pdf_profile && data.foto_profile_url) {
                pdfPreview.src = data.foto_profile_url;
                pdfPreview.classList.remove('hidden');
                imgPreview.classList.add('hidden');
            } else if (data.foto_profile_url) {
                imgPreview.src = data.foto_profile_url;
                imgPreview.classList.remove('hidden');
                pdfPreview.classList.add('hidden');
            } else {
                imgPreview.classList.add('hidden');
                pdfPreview.classList.add('hidden');
            }

            // Show modal
            document.getElementById('modal-create-multistep').classList.remove('hidden');
            document.getElementById('existing-profile-preview')?.classList.remove('hidden');
            document.body.classList.add('modal-open');

            // Update modal title and description
            document.querySelector('#modal-create-multistep h2').textContent = 'Edit User';
            document.querySelector('#modal-create-multistep p').textContent = 'Edit informasi terkait user yang terdaftar.';
        }

    </script>

   
</x-app-layout>
