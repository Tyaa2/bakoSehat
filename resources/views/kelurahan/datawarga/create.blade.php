<x-app-layout>
    
<div class="container mx-auto p-4 max-w-lg">
    <h1 class="text-2xl font-bold mb-6">Upload Surat Keterangan Domisili</h1>

    @if ($errors->any())
        <div class="mb-4 p-3 bg-red-100 border border-red-400 text-red-700 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('kelurahan.data-warga.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div>
            <label for="nik" class="block font-medium mb-1">NIK Warga</label>
            <input type="text" name="nik" id="nik" value="{{ old('nik') }}" required
                class="w-full border border-gray-300 rounded px-3 py-2" placeholder="Masukkan NIK warga">
        </div>

        <div>
            <label for="surat_keterangan_domisili" class="block font-medium mb-1">Surat Keterangan Domisili (PDF/JPG/PNG)</label>
            <input type="file" name="surat_keterangan_domisili" id="surat_keterangan_domisili" required
                accept=".pdf,.jpg,.jpeg,.png"
                class="w-full">
        </div>

        <button type="submit" class="bg-blue-600 text-white font-semibold px-4 py-2 rounded hover:bg-blue-700">
            Upload
        </button>
    </form>
</div>


</x-app-layout>