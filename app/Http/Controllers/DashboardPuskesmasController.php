<?php

namespace App\Http\Controllers;
use App\Models\DataWarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DashboardPuskesmasController extends Controller
{
    public function index(Request $request)
    {
        $puskesmasId = Auth::id();
        $user = Auth::user();

        $filter = $request->query('filter');

        // Filter utama berdasarkan created_by
        $query = DataWarga::where('created_by', $puskesmasId);

        if ($filter === 'approved') {
            $query->where('status_approve_dinkes', 'approved');
        } elseif ($filter === 'rejected') {
            $query->where('status_approve_dinkes', 'rejected'); //->whereNotNull('alasan_penolakan_dinkes');
        } elseif ($filter === 'pending') {
            $query->where('status_approve_dinkes', 'pending');
        }

        // Langsung pakai satu variabel saja
        $dataWarga = $query->latest('created_at')->take(4)->get();
        $latestWarga = $dataWarga; // Alias, jika dibutuhkan di tampilan

        // Statistik ringkasan
        $semuaWarga = DataWarga::where('created_by', $puskesmasId)->get();
        $total = $semuaWarga->count();
        $terverifikasi = $semuaWarga->where('status_approve_dinkes', 'approved')->count();
        $ditolak = $semuaWarga->where('status_approve_dinkes', 'rejected')->count(); //->whereNotNull('alasan_penolakan_dinkes')
        $menunggu = $semuaWarga->where('status_approve_dinkes', 'pending')->whereNull('alasan_penolakan_dinkes')->count();

        return view('puskesmas.dashboard', compact('dataWarga', 'latestWarga', 'total', 'terverifikasi', 'ditolak', 'menunggu', 'user'));
    }
    public function refreshJson()
    {
        try {
            if (!Auth::check()) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }

            $puskesmasId = Auth::id();

            $semuaWarga = DataWarga::where('created_by', $puskesmasId)->get();

            $latestWarga = DataWarga::where('created_by', $puskesmasId)
                ->latest('created_at')
                ->take(4)
                ->get()
                ->map(function ($warga) {
                    return [
                        'id' => $warga->id,
                        'nama' => $warga->nama,
                        'nik' => $warga->nik,
                        'status' => $warga->status_approve_dinkes ?? 'pending',
                        'tanggal' => $warga->tanggal_data_masuk ? optional($warga->tanggal_data_masuk)->format('Y-m-d') : null,
                    ];
                });

            return response()->json([
                'total' => $semuaWarga->count(),
                'terverifikasi' => $semuaWarga->where('status_approve_dinkes', 'approved')->count(),
                'ditolak' => $semuaWarga->where('status_approve_dinkes', 'rejected')->count(),
                'menunggu' => $semuaWarga->where('status_approve_dinkes', 'pending')->whereNull('alasan_penolakan_dinkes')->count(),
                'warga' => $latestWarga,
            ]);
        } catch (\Exception $e) {
            Log::error('DashboardPuskesmasController@refreshJson error: ' . $e->getMessage());
            return response()->json(['error' => 'Server error'], 500);
        }
    }
}
