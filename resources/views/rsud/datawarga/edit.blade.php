<x-app-layout>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('rsud.data-warga.update', $dataWarga->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        {{-- ktp --}}
        <div class="mb-3">
            <label for="tanggal_data_masuk" class="form-label">Tanggal Data Masuk</label>
            <input type="date" name="tanggal_data_masuk" class="form-control"
                value="{{ $dataWarga->tanggal_data_masuk }}" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_masuk_pasien" class="form-label">Tanggal Masuk Pasien</label>
            <input type="date" name="tanggal_masuk_pasien" class="form-control"
                value="{{ $dataWarga->tanggal_masuk_pasien }}">
        </div>

        <div class="mb-3">
            <label for="tanggal_keluar_pasien" class="form-label">Tanggal Keluar Pasien</label>
            <input type="date" name="tanggal_keluar_pasien" class="form-control"
                value="{{ $dataWarga->tanggal_keluar_pasien }}">
        </div>

        <div class="mb-3">
            <label for="foto_ktp" class="form-label">Foto KTP (Biarkan kosong jika tidak diganti)</label>
            <input type="file" name="foto_ktp" class="form-control" accept="image/*" id="foto_ktp_input">
        </div>
        <div class="mt-2">
        <div class="mb-3">
            <label for="nama" class="form-label">nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $dataWarga->nama }}"
                required>
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="number" name="nik" class="form-control" value="{{ old('nik', $dataWarga->nik) }}" required>
            @error('nik')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="{{ $dataWarga->tanggal_lahir }}"
                required>
        </div>

        <div class="mb-3">
            <label for="alamat_kk" class="form-label">Alamat Sesuai KK</label>
            <textarea name="alamat_kk" class="form-control" rows="2" required>{{ $dataWarga->alamat_kk }}</textarea>
        </div>

        <div class="mb-3">
            <label for="nama_kelurahan" class="form-label">Nama Kelurahan</label>
            <input type="text" name="nama_kelurahan" class="form-control"
                value="{{ $dataWarga->nama_kelurahan }}" required>
        </div>

        <div class="mb-3">
            <label for="kecamatan" class="form-label">Kecamatan</label>
            <input type="text" name="kecamatan" class="form-control" value="{{ $dataWarga->kecamatan }}"
                required>
        </div>

        {{-- kk --}}
        
        
        <div class="mb-3">
            <label for="foto_kk" class="form-label">Foto KK</label>
            <input type="file" name="foto_kk" class="form-control" accept="image/*">
        </div>

        <div class="mb-3">
            <label for="nomor_kk" class="form-label">Nomor KK</label>
            <input type="text" name="nomor_kk" class="form-control" value="{{ $dataWarga->nomor_kk }}" required>
        </div>

        {{-- puskesmas --}}


        <div class="mb-3">
            <label for="surat_keterangan_sakit" class="form-label">Surat Keterangan Sakit</label>
            <input type="file" name="surat_keterangan_sakit" class="form-control"
                accept="application/pdf,image/*">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('rsud.data-warga.index') }}" class="btn btn-secondary">Batal</a>
    </form>
    </div>

</x-app-layout>
