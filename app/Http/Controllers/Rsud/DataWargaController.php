<?php

namespace App\Http\Controllers\Rsud;

use App\Http\Controllers\Controller;
use App\Models\DataWarga;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class DataWargaController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->query('filter', 'all');
        $search = $request->query('search');
        $sort = $request->query('sort', 'created_at');
        $direction = $request->query('direction', 'desc');

        $query = DataWarga::where('created_by', Auth::id());

        if ($filter === 'approved') {
            $query->where('status_approve_dinkes', 'approved');
        } elseif ($filter === 'rejected') {
            $query->where('status_approve_dinkes', 'rejected');
        } elseif ($filter === 'pending') {
            $query->where('status_approve_dinkes', 'pending');
        }

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%$search%")
                    ->orWhere('nik', 'like', "%$search%")
                    ->orWhere('nomor_kk', 'like', "%$search%")
                    ->orWhere('alamat_kk', 'like', "%$search%")
                    ->orWhere('nama_kelurahan', 'like', "%$search%")
                    ->orWhere('kecamatan', 'like', "%$search%");
            });
        }

        $query->orderBy($sort, $direction);

        $dataWarga = $query->latest()->paginate(10)->withQueryString();
        $kelurahanUsers = User::where('role', 'kelurahan')->get();

        return view('rsud.datawarga.index', compact('dataWarga', 'filter', 'search', 'sort', 'direction', 'kelurahanUsers'));
    }

    public function create()
    {
        $kelurahanUsers = User::where('role', 'kelurahan')->get();
        return view('rsud.datawarga.create', compact('kelurahanUsers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal_data_masuk' => 'required|date',
            'tanggal_masuk_pasien' => 'nullable|date',
            'tanggal_keluar_pasien' => 'nullable|date',
            'nomor_kk' => 'required|string|max:20',
            'nama' => 'required|string|max:100',
            'nik' => 'required|digits:16|unique:data_warga,nik',
            'tanggal_lahir' => 'required|date',
            'alamat_kk' => 'required|string',
            'nama_kelurahan' => 'required|string|max:100',
            'kecamatan' => 'required|string|max:100',
            'foto_ktp' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'foto_kk' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'surat_keterangan_sakit' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'surat_keterangan_domisili' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'kelurahan_id' => 'nullable|exists:users,id',
        ]);

        $data = $request->only([
            'tanggal_data_masuk', 'tanggal_masuk_pasien', 'tanggal_keluar_pasien', 'nomor_kk', 'nama', 'nik',
            'tanggal_lahir', 'alamat_kk', 'nama_kelurahan', 'kecamatan'
        ]);

        $data['target_kelurahan_id'] = $request->input('target_kelurahan_id');
        $data['created_by'] = Auth::id();
        $data['nama_puskesmas'] = Auth::user()->alamat;
        $data['status_approve_dukcapil'] = 'pending';
        $data['status_approve_dinkes'] = 'pending';

        if ($request->hasFile('foto_ktp')) {
            $data['foto_ktp'] = $request->file('foto_ktp')->store('uploads/foto_ktp', 'public');
        }
        if ($request->hasFile('foto_kk')) {
            $data['foto_kk'] = $request->file('foto_kk')->store('uploads/foto_kk', 'public');
        }
        if ($request->hasFile('surat_keterangan_sakit')) {
            $data['surat_keterangan_sakit'] = $request->file('surat_keterangan_sakit')->store('uploads/surat_keterangan_sakit', 'public');
        }
        if ($request->hasFile('surat_keterangan_domisili')) {
            $data['surat_keterangan_domisili'] = $request->file('surat_keterangan_domisili')->store('uploads/surat_keterangan_domisili', 'public');
        }

        DataWarga::create($data);

        return redirect()->route('rsud.data-warga.index')->with('success', 'Data warga berhasil disimpan.');
    }

    public function edit(DataWarga $dataWarga)
    {
        $this->authorize('update', $dataWarga);
        return view('rsud.datawarga.edit', compact('dataWarga'));
    }

    public function update(Request $request, DataWarga $dataWarga)
    {
        $this->authorize('update', $dataWarga);

        $request->validate([
            'tanggal_data_masuk' => 'required|date',
            'tanggal_masuk_pasien' => 'nullable|date',
            'tanggal_keluar_pasien' => 'nullable|date',
            'nomor_kk' => 'required|string|max:20',
            'nama' => 'required|string|max:100',
            'nik' => 'required|digits:16',
            'tanggal_lahir' => 'required|date',
            'alamat_kk' => 'required|string',
            'nama_kelurahan' => 'required|string|max:100',
            'kecamatan' => 'required|string|max:100',
            'foto_ktp' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'foto_kk' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'surat_keterangan_sakit' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'surat_keterangan_domisili' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'kelurahan_id' => 'nullable|exists:users,id',
        ]);

        // Validasi NIK unik (selain miliknya sendiri)
        $nikExists = DataWarga::where('nik', $request->nik)
            ->where('id', '!=', $dataWarga->id)
            ->exists();

        if ($nikExists) {
            return redirect()->back()
                ->withInput()
                ->with('warning', 'NIK sudah digunakan oleh data lain. Silakan gunakan NIK yang berbeda.');
        }

        $data = $request->only([
            'tanggal_data_masuk', 'tanggal_masuk_pasien', 'tanggal_keluar_pasien', 'nomor_kk', 'nama', 'nik',
            'tanggal_lahir', 'alamat_kk', 'nama_kelurahan', 'kecamatan'
        ]);
        $data['target_kelurahan_id'] = $request->input('target_kelurahan_id');

        if ($request->hasFile('foto_ktp')) {
            if ($dataWarga->foto_ktp) Storage::disk('public')->delete($dataWarga->foto_ktp);
            $data['foto_ktp'] = $request->file('foto_ktp')->store('uploads/foto_ktp', 'public');
        }

        if ($request->hasFile('foto_kk')) {
            if ($dataWarga->foto_kk) Storage::disk('public')->delete($dataWarga->foto_kk);
            $data['foto_kk'] = $request->file('foto_kk')->store('uploads/foto_kk', 'public');
        }

        if ($request->hasFile('surat_keterangan_sakit')) {
            if ($dataWarga->surat_keterangan_sakit) Storage::disk('public')->delete($dataWarga->surat_keterangan_sakit);
            $data['surat_keterangan_sakit'] = $request->file('surat_keterangan_sakit')->store('uploads/surat_keterangan_sakit', 'public');
        }

        if ($request->hasFile('surat_keterangan_domisili')) {
            if ($dataWarga->surat_keterangan_domisili) Storage::disk('public')->delete($dataWarga->surat_keterangan_domisili);
            $data['surat_keterangan_domisili'] = $request->file('surat_keterangan_domisili')->store('uploads/surat_keterangan_domisili', 'public');
            $data['alasan_penolakan_kelurahan'] = null;
        }

        if ($dataWarga->status_approve_dinkes === 'rejected') {
            $data['status_approve_dinkes'] = 'pending';
            $data['alasan_penolakan_dinkes'] = null;
        }

        if ($dataWarga->status_approve_dukcapil === 'rejected') {
            $data['status_approve_dukcapil'] = 'pending';
            $data['alasan_penolakan_dukcapil'] = null;
        }

        $dataWarga->update($data);
        return redirect()->route('rsud.data-warga.index')->with('success', 'Data warga berhasil diperbarui.');
    }

    public function destroy(DataWarga $dataWarga)
    {
        $this->authorize('delete', $dataWarga);

        if ($dataWarga->foto_ktp) Storage::disk('public')->delete($dataWarga->foto_ktp);
        if ($dataWarga->foto_kk) Storage::disk('public')->delete($dataWarga->foto_kk);
        if ($dataWarga->surat_keterangan_sakit) Storage::disk('public')->delete($dataWarga->surat_keterangan_sakit);
        if ($dataWarga->surat_keterangan_domisili) Storage::disk('public')->delete($dataWarga->surat_keterangan_domisili);

        $dataWarga->delete();
        return redirect()->route('rsud.data-warga.index')->with('success', 'Data warga berhasil dihapus.');
    }

    public function cekNIK(Request $request)
    {
        $nik = $request->query('nik');
        $exists = DB::table('data_warga')->where('nik', $nik)->exists();

        return response()->json(['exists' => $exists]);
    }
}
