<x-app-layout>
    
<div class="container">
    <h2 class="mb-4">Tambah Data Warga</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan!</strong><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="{{ route('puskesmas.data-warga.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

<div class="mb-3">
            <label class="form-label">Tanggal Data Masuk</label>
            <input type="date" name="tanggal_data_masuk" class="form-control" value="{{ date('Y-m-d') }}" required>
        </div>
        {{-- ktp --}}
        
        <div class="mb-3">
            <label class="form-label">Foto KTP (Opsional)</label>
            <input type="file" name="foto_ktp" class="form-control" accept="image/*">
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" required>
        </div>
 <div class="mb-3">
            <label class="form-label">Alamat Sesuai KK</label>
            <textarea name="alamat_kk" class="form-control" rows="2" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Kelurahan</label>
            <input type="text" name="nama_kelurahan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kecamatan</label>
            <input type="text" name="kecamatan" class="form-control" required>
        </div>

        {{-- kk --}}
        
        <div class="mb-3">
            <label class="form-label">Foto KK (Opsional)</label>
            <input type="file" name="foto_kk" class="form-control" accept="image/*">
        </div>


        <div class="mb-3">
            <label class="form-label">Nomor Kartu Keluarga</label>
            <input type="text" name="nomor_kk" class="form-control" required>
        </div>

        
{{-- puskesmas --}}
        <div class="mb-3">
            <label class="form-label">Nama Puskesmas</label>
            <input type="text" class="form-control" value="{{ Auth::user()->alamat }}" readonly>
        </div>
<div class="mb-3">
            <label class="form-label">Surat Keterangan Sakit (Opsional)</label>
            <input type="file" name="surat_keterangan_sakit" class="form-control" accept="application/pdf,image/*">
        </div>
       


        

        {{-- Hidden status default --}}
        <input type="hidden" name="status_approve_dukcapil" value="pending">
        <input type="hidden" name="status_approve_dinkes" value="pending">

        <button type="submit" class="btn btn-primary">Simpan Data</button>
<a href="{{ route('puskesmas.data-warga.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>

</x-app-layout>
