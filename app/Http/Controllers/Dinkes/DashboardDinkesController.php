<?php

namespace App\Http\Controllers\Dinkes;
use App\Http\Controllers\Controller;
use App\Models\DataWarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DashboardDinkesController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $filter = $request->query('filter');

        // Query awal tanpa batasan target user
        $query = DataWarga::query();

        if ($filter === 'approved') {
            $query->where('status_approve_dinkes', 'approved');
        } elseif ($filter === 'rejected') {
            $query->where('status_approve_dinkes', 'rejected');
        } elseif ($filter === 'pending') {
            $query->where('status_approve_dinkes', 'pending');
        }

        // Ambil data warga terbaru sesuai filter (maksimal 4)
        $dataWarga = $query->latest('created_at')->take(4)->get();
        $latestWarga = $dataWarga;

        // Statistik seluruh data tanpa batasan user
        $semuaWarga = DataWarga::all();
        $total = $semuaWarga->count();
        $terverifikasi = $semuaWarga->where('status_approve_dinkes', 'approved')->count();
        $ditolak = $semuaWarga->where('status_approve_dinkes', 'rejected')->count();
        $menunggu = $semuaWarga->where('status_approve_dinkes', 'pending')->whereNull('alasan_penolakan_dinkes')->count();

        return view('dinkes.dashboard', compact('dataWarga', 'latestWarga', 'total', 'terverifikasi', 'ditolak', 'menunggu', 'user'));
    }
}
