<x-app-layout>


    <div class="mt-20 text-sm relative pt-10">

        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div
                class="absolute bg-center top-0 left-0 w-full h-[120px] z-0 bg-[url('https://i.pinimg.com/736x/a8/d2/fb/a8d2fb572ed0bc5a01a17da91d058ac6.jpg')] rounded-xl">
            </div>
            <div class="relative px-6 max-w-8xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">


                        <div
                            class="relative flex flex-col w-full h-full text-gray-700 bg-white rounded-xl bg-clip-border">
                            <div
                                class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
                                <div class="flex items-center justify-between gap-8 mb-8">

                                    <div>
                                        <h5
                                            class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-gray-800">
                                            Laporan Pendaftaran BPJS Gratis Puskesmas
                                        </h5>
                                        <p
                                            class="block mt-1 font-sans text-base antialiased font-normal leading-relaxed text-gray-500">
                                            Lihat informasi mengenai pendaftaran BPJS gratis, cek Kelengkapan data secara
                                            berkala dari Puskesmas.
                                        </p>
                                    </div>

                                </div>



                                <!-- Container form dan filter -->
                                <div class="flex flex-col md:flex-row justify-between items-center">

                                    <!-- Form Pencarian -->
                                    <div class="flex justify-start px-4 py-2">
                                        <form method="GET" action="{{ route('export.history') }}"
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
                                <!-- Tabel Laporan -->
                                <div class="overflow-x-auto px-6 py-6">
                                    <table class="min-w-full">
                                        <thead>
                                            <tr>
                                                <th class="text-left text-gray-600 text-sm font-semibold px-4 py-3 bg-indigo-50 hover:bg-indigo-100">
                                                    Status</th>
                                                <th class="text-left text-gray-600 text-sm font-semibold px-4 py-3 bg-indigo-50 hover:bg-indigo-100">
                                                    Tanggal</th>
                                                <th class="text-left text-gray-600 text-sm font-semibold px-4 py-3 bg-indigo-50 hover:bg-indigo-100">Kode
                                                </th>
                                                <th class="text-left text-gray-600 text-sm font-semibold px-4 py-3 bg-indigo-50 hover:bg-indigo-100">Awal
                                                    Tanggal
                                                </th>
                                                <th class="text-left text-gray-600 text-sm font-semibold px-4 py-3 bg-indigo-50 hover:bg-indigo-100">
                                                    Akhir
                                                    Tanggal</th>
                                                <th class="text-left text-gray-600 text-sm font-semibold px-4 py-3 bg-indigo-50 hover:bg-indigo-100">File
                                                </th>
                                                <th class="text-center text-gray-600 text-sm font-semibold px-4 py-3 bg-indigo-50 hover:bg-indigo-100">
                                                    Unduh</th>
                                                <th class="text-center text-gray-600 text-sm font-semibold px-4 py-3 bg-indigo-50 hover:bg-indigo-100">
                                                    Hapus</th>
                                                    

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($histories as $h)
                                                <tr
                                                    class="border-y-2 border-gray-50 hover:bg-gray-50 transition">
                                                    <td
                                                        class="px-4 py-5 text-yellow-600 font-semibold whitespace-nowrap">
                                                        Berhasil</td>
                                                    <td class="px-4 py-5 whitespace-nowrap">
                                                        {{ \Carbon\Carbon::parse($h->created_at)->format('d-m-Y') }}
                                                    </td>
                                                    <td class="px-4 py-5 whitespace-nowrap">{{ $h->download_code }}</td>

                                                    <td class="px-4 py-5 whitespace-nowrap">
                                                        {{ \Carbon\Carbon::parse($h->start_date)->format('d-m-Y') }}
                                                    </td>
                                                    <td class="px-4 py-5 whitespace-nowrap">
                                                        {{ \Carbon\Carbon::parse($h->end_date)->format('d-m-Y') }}</td>

                                                    <td>
                                                        <div
                                                            class="border-2 border-gray-100 px-3 py-2 bg-gray-50/70 rounded-md">
                                                            {{ $h->filename }}</div>
                                                    </td>
                                                    <td class="px-4 py-3 text-center">
                                                        <a href="{{ route('export.download', $h->filename) }}"
                                                            class="bg-gray-800 text-white px-4 py-1 rounded-md hover:bg-gray-700 transition"
                                                            type="button">Unduh</a>
                                                    </td>


                                                    <td>
                                                        <button
                                                            onclick="document.getElementById('modal-delete-{{ $h->id }}').classList.remove('hidden')"
                                                            class="flex justify-center items-center h-10 w-10 rounded-lg text-center text-xs font-medium uppercase text-red-800 transition-all hover:bg-gray-800/10">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="size-5">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                            </svg>
                                                        </button>
                                                    </td>

                                                    
                                                </tr>



                                                <div id="modal-delete-{{ $h->id }}"
                                                    class="modal-container hidden fixed inset-0 z-[9999] items-center justify-center bg-black/40">
                                                    <div
                                                        class="modal-box bg-white p-6 rounded-xl relative max-w-sm w-full">
                                                        <button
                                                            onclick="document.getElementById('modal-delete-{{ $h->id }}').classList.add('hidden')"
                                                            class="absolute top-4 right-4 text-2xl text-gray-500 hover:text-black transition-colors">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="size-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
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
                                                                    class="bg-gray-100 rounded-md p-2 text-red-600">{{ $h->filename }}</span>
                                                                ini?</p>
                                                            <p></p>
                                                            <!-- Tombol Aksi -->
                                                            <div class="flex justify-center gap-4">
                                                                <form method="POST"
                                                                    action="{{ route('export.delete', $h->id) }}">
                                                                    @csrf @method('DELETE')
                                                                    <input type="hidden" name="_token"
                                                                        value="{{ csrf_token() }}">
                                                                    <button
                                                                        class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Ya,
                                                                        delete</button>
                                                                </form>
                                                                <button
                                                                    onclick="document.getElementById('modal-delete-{{ $h->id }}').classList.add('hidden')"
                                                                    class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">Batal</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <tr>
                                                    <td colspan="100%" class="text-sm text-gray-500 text-center py-4">
                                                        Tidak ada hasil yang cocok dengan pencarian.
                                                    </td>
                                                </tr>
                                            @endforelse

                                        </tbody>
                                    </table>
                                </div>
<div class="flex items-center justify-between p-4 border-t border-gray-50">
                                <p class="text-sm text-gray-600">
                                    Page {{ $histories->currentPage() }} of {{ $histories->lastPage() }}
                                </p>

                                <div class="flex gap-2">
                                    {{-- Tombol Previous --}}
                                    <a href="{{ $histories->previousPageUrl() }}" class="rounded-lg border border-gray-900 py-2 px-4 text-xs font-bold uppercase text-gray-600 transition-all hover:opacity-75 focus:ring focus:ring-gray-300 active:opacity-85 {{ $histories->onFirstPage() ? 'pointer-events-none opacity-50' : '' }}">
                                        Previous
                                    </a>

                                    {{-- Tombol Next --}}
                                    <a href="{{ $histories->nextPageUrl() }}" class="rounded-lg border border-gray-900 py-2 px-4 text-xs font-bold uppercase text-gray-600 transition-all hover:opacity-75 focus:ring focus:ring-gray-300 active:opacity-85 {{ !$histories->hasMorePages() ? 'pointer-events-none opacity-50' : '' }}">
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
    </div>
    </div>
    
</x-app-layout>


<style>
    .modal-container {
        position: fixed;
        inset: 0;
        background-color: rgba(0, 0, 0, 0.6);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999 !important;
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

    .hidden {
        display: none !important;
    }
</style>
