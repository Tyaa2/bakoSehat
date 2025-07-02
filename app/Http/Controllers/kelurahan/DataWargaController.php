<?php

namespace App\Http\Controllers\Kelurahan;

use App\Http\Controllers\Controller;
use App\Models\DataWarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class DataWargaController extends Controller
{
    // Menampilkan daftar semua data warga
    public function index(Request $request)
    {
        $filter = $request->query('filter', 'all');
        $search = $request->query('search');
        $sort = $request->query('sort', 'created_at'); // default kolom
        $direction = $request->query('direction', 'desc'); // default arah

        // 🔐 Batasi hanya data yang ditujukan ke kelurahan login
        $query = DataWarga::where('target_kelurahan_id', Auth::id());

        if ($filter === 'approved') {
            $query->whereNotNull('surat_keterangan_domisili')->whereNull('alasan_penolakan_kelurahan');
        } elseif ($filter === 'rejected') {
            $query->whereNotNull('alasan_penolakan_kelurahan');
        } elseif ($filter === 'pending') {
            $query->whereNull('alasan_penolakan_kelurahan')->whereNull('surat_keterangan_domisili');
        }

        // Fitur pencarian
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%$search%")
                    ->orWhere('nik', 'like', "%$search%")
                    ->orWhere('nomor_kk', 'like', "%$search%")
                    ->orWhere('alamat_kk', 'like', "%$search%")
                    ->orWhere('nama_kelurahan', 'like', "%$search%")
                    ->orWhere('kecamatan', 'like', "%$search%")
                    ->orWhereRaw("DATE_FORMAT(tanggal_data_masuk, '%d-%m-%Y') LIKE ?", ["%{$search}%"])
                    ->orWhereRaw("DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') LIKE ?", ["%{$search}%"]);
            });
        }
        // Apply sorting
        $query->orderBy($sort, $direction);

        $dataWarga = $query->latest()->paginate(10)->withQueryString();

        return view('kelurahan.datawarga.index', compact('dataWarga', 'filter', 'search', 'sort', 'direction'));
    }

    // Menampilkan form upload domisili untuk warga yang belum punya
    public function create(Request $request)
    {
        $warga = DataWarga::findOrFail($request->id);
        return view('kelurahan.datawarga.create', compact('warga'));
    }

    // Menyimpan file surat domisili
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|exists:data_warga,nik',
            'surat_keterangan_domisili' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        // Cari data warga berdasarkan nik
        $warga = DataWarga::where('nik', $request->nik)->firstOrFail();

        // Hapus file lama jika ada
        if ($warga->surat_keterangan_domisili) {
            Storage::delete($warga->surat_keterangan_domisili);
        }

        // Upload file baru
        $filePath = $request->file('surat_keterangan_domisili')->store('uploads/surat_domisili', 'public');
        $warga->surat_keterangan_domisili = $filePath;
        $warga->save();

        return redirect()->route('kelurahan.data-warga.index')->with('success', 'Surat domisili berhasil diunggah.');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $warga = DataWarga::findOrFail($id);
        return view('kelurahan.datawarga.edit', compact('warga'));
    }

    public function show($id)
    {
        $warga = DataWarga::findOrFail($id);
        return view('kelurahan.datawarga.index', compact('warga'));
    }

    // Update surat domisili
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'surat_keterangan_domisili' => 'file|mimes:pdf,jpg,jpeg,png|max:2048',
            ],
            [
                'surat_keterangan_domisili.file' => 'File harus berupa file yang valid.',
                'surat_keterangan_domisili.mimes' => 'Format file harus PDF, JPG, JPEG, atau PNG.',
                'surat_keterangan_domisili.max' => 'Ukuran file maksimal 2MB.',
            ],
        );

        $warga = DataWarga::findOrFail($id);

        try {
            if ($request->hasFile('surat_keterangan_domisili')) {
                // Hapus file lama jika ada
                if ($warga->surat_keterangan_domisili) {
                    Storage::disk('public')->delete($warga->surat_keterangan_domisili);
                }

                // Simpan file baru
                $filePath = $request->file('surat_keterangan_domisili')->store('uploads/surat_domisili', 'public');
                $warga->surat_keterangan_domisili = $filePath;

                // Reset alasan penolakan jika file baru diunggah
                $warga->alasan_penolakan_kelurahan = null;

                $warga->save();

                return redirect()->route('kelurahan.data-warga.index')->with('success', 'Surat domisili berhasil diperbarui.');
            } else {
                return redirect()->route('kelurahan.data-warga.index')->with('info', 'Tidak ada file baru yang diunggah.');
            }
        } catch (\Exception $e) {
            Log::error('Gagal menyimpan surat keterangan domisili: ' . $e->getMessage());
            return redirect()
                ->back()
                ->withErrors(['surat_keterangan_domisili' => 'Terjadi kesalahan saat menyimpan file. Silakan coba lagi.'])
                ->withInput();
        }
    }

    // Hapus surat domisili
    public function destroy($id)
    {
        $warga = DataWarga::findOrFail($id);

        if ($warga->surat_keterangan_domisili) {
            Storage::delete($warga->surat_keterangan_domisili);
            $warga->surat_keterangan_domisili = null;
            $warga->save();
        }

        return redirect()->route('kelurahan.data-warga.index')->with('success', 'Surat domisili berhasil dihapus.');
    }
    public function tolak(Request $request, $id)
    {
        $request->validate([
            'alasan_penolakan_kelurahan' => 'required|string',
        ]);

        $warga = DataWarga::findOrFail($id);
        $warga->alasan_penolakan_kelurahan = $request->alasan_penolakan_kelurahan;
        $warga->save();

        return redirect()->back()->with('success', 'Data warga berhasil ditolak dengan alasan.');
    }
}
