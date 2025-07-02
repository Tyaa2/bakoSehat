<?php

namespace App\Http\Controllers\Dukcapil;

use App\Http\Controllers\Controller;
use App\Models\DataWarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DashboardDukcapilController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $filter = $request->query('filter');

        // Query awal tanpa pembatasan user
        $query = DataWarga::query();

        if ($filter === 'approved') {
            $query->where('status_approve_dukcapil', 'approved');
        } elseif ($filter === 'rejected') {
            $query->where('status_approve_dukcapil', 'rejected');
        } elseif ($filter === 'pending') {
            $query->where('status_approve_dukcapil', 'pending');
        }

        $dataWarga = $query->latest('created_at')->take(4)->get();
        $latestWarga = $dataWarga;

        // Statistik ringkasan global
        $semuaWarga = DataWarga::all();
        $total = $semuaWarga->count();
        $terverifikasi = $semuaWarga->where('status_approve_dukcapil', 'approved')->count();
        $ditolak = $semuaWarga->where('status_approve_dukcapil', 'rejected')->count();
        $menunggu = $semuaWarga->where('status_approve_dukcapil', 'pending')
                                ->whereNull('alasan_penolakan_dukcapil')->count();

        return view('dukcapil.dashboard', compact(
            'dataWarga', 'latestWarga', 'total', 'terverifikasi', 'ditolak', 'menunggu', 'user'
        ));
    }

    public function refreshJson()
    {
        try {
            if (!Auth::check()) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }

            $semuaWarga = DataWarga::all();

            $latestWarga = DataWarga::latest('created_at')
                ->take(4)
                ->get()
                ->map(function ($warga) {
                    return [
                        'id' => $warga->id,
                        'nama' => $warga->nama,
                        'nik' => $warga->nik,
                        'status' => $warga->status_approve_dukcapil ?? 'pending',
                        'tanggal' => $warga->tanggal_data_masuk
                            ? optional($warga->tanggal_data_masuk)->format('Y-m-d')
                            : null,
                    ];
                });

            return response()->json([
                'total' => $semuaWarga->count(),
                'terverifikasi' => $semuaWarga->where('status_approve_dukcapil', 'approved')->count(),
                'ditolak' => $semuaWarga->where('status_approve_dukcapil', 'rejected')->count(),
                'menunggu' => $semuaWarga->where('status_approve_dukcapil', 'pending')
                                          ->whereNull('alasan_penolakan_dukcapil')->count(),
                'warga' => $latestWarga,
            ]);
        } catch (\Exception $e) {
            Log::error('DashboardDukcapilController@refreshJson error: ' . $e->getMessage());
            return response()->json(['error' => 'Server error'], 500);
        }
    }
}
