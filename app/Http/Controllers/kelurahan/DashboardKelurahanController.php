<?php

namespace App\Http\Controllers\Kelurahan;

use App\Http\Controllers\Controller;
use App\Models\DataWarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DashboardKelurahanController extends Controller
{
    public function index(Request $request)
    {
        $kelurahanId = Auth::id();
        $user = Auth::user();

        $filter = $request->query('filter');

        // Query dasar berdasarkan target_kelurahan_id
        $query = DataWarga::where('target_kelurahan_id', $kelurahanId);

        if ($filter === 'approved') {
            $query->whereNotNull('surat_keterangan_domisili')->whereNull('alasan_penolakan_kelurahan');
        } elseif ($filter === 'rejected') {
            $query->whereNotNull('alasan_penolakan_kelurahan');
        } elseif ($filter === 'pending') {
            $query->whereNull('surat_keterangan_domisili')->whereNull('alasan_penolakan_kelurahan');
        }

        $dataWarga = $query->latest('created_at')->take(4)->get();
        $latestWarga = $dataWarga; // Alias untuk kemudahan tampilan

        // Statistik ringkasan
        $semuaWarga = DataWarga::where('target_kelurahan_id', $kelurahanId)->get();
        $total = $semuaWarga->count();
        $terverifikasi = $semuaWarga->whereNotNull('surat_keterangan_domisili')->whereNull('alasan_penolakan_kelurahan')->count();
        $ditolak = $semuaWarga->whereNotNull('alasan_penolakan_kelurahan')->count();
        $menunggu = $semuaWarga->whereNull('surat_keterangan_domisili')->whereNull('alasan_penolakan_kelurahan')->count();

        return view('kelurahan.dashboard', compact(
            'dataWarga', 'latestWarga', 'total', 'terverifikasi', 'ditolak', 'menunggu', 'user'
        ));
    }

    public function refreshJson()
    {
        try {
            if (!Auth::check()) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }

            $kelurahanId = Auth::id();

            $semuaWarga = DataWarga::where('target_kelurahan_id', $kelurahanId)->get();

            $latestWarga = DataWarga::where('target_kelurahan_id', $kelurahanId)
                ->latest('created_at')
                ->take(4)
                ->get()
                ->map(function ($warga) {
                    return [
                        'id' => $warga->id,
                        'nama' => $warga->nama,
                        'nik' => $warga->nik,
                        'status' => $warga->surat_keterangan_domisili
                            ? 'approved'
                            : ($warga->alasan_penolakan_kelurahan ? 'rejected' : 'pending'),
                        'tanggal' => $warga->tanggal_data_masuk
                            ? optional($warga->tanggal_data_masuk)->format('Y-m-d')
                            : null,
                    ];
                });

            return response()->json([
                'total' => $semuaWarga->count(),
                'terverifikasi' => $semuaWarga->whereNotNull('surat_keterangan_domisili')->whereNull('alasan_penolakan_kelurahan')->count(),
                'ditolak' => $semuaWarga->whereNotNull('alasan_penolakan_kelurahan')->count(),
                'menunggu' => $semuaWarga->whereNull('surat_keterangan_domisili')->whereNull('alasan_penolakan_kelurahan')->count(),
                'warga' => $latestWarga,
            ]);
        } catch (\Exception $e) {
            Log::error('DashboardKelurahanController@refreshJson error: ' . $e->getMessage());
            return response()->json(['error' => 'Server error'], 500);
        }
    }
}
