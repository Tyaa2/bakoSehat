<?php

namespace App\Http\Controllers\Dukcapil;

use App\Http\Controllers\Controller;
use App\Models\DataWarga;
use Illuminate\Http\Request;

class ApproveController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->query('filter', 'all');
        $search = $request->query('search');
        $sort = $request->query('sort', 'created_at'); // default kolom
        $direction = $request->query('direction', 'desc'); // default arah

        $query = DataWarga::query();

        // Filter status
        if ($filter === 'approved') {
            $query->where('status_approve_dukcapil', 'approved');
        } elseif ($filter === 'rejected') {
            $query->where('status_approve_dukcapil', 'rejected');
        } elseif ($filter === 'pending') {
            $query->where('status_approve_dukcapil', 'pending');
        }

        // Pencarian
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
        $dataWarga = $query->paginate(10)->withQueryString();

        return view('dukcapil.approve.index', compact('dataWarga', 'filter', 'search', 'sort', 'direction'));
    }

    public function approve(Request $request, $id)
    {
        $warga = DataWarga::findOrFail($id);
        $action = $request->input('action');
        $alasan = $request->input('alasan_penolakan_dukcapil');

        if ($action === 'approve') {
            $warga->status_approve_dukcapil = 'approved';
            $warga->alasan_penolakan_dukcapil = null;
        } elseif ($action === 'reject') {
            $warga->status_approve_dukcapil = 'rejected';
            $warga->alasan_penolakan_dukcapil = $alasan;
        } else {
            return redirect()->route('dukcapil.approve.index')->with('error', 'Aksi tidak dikenali.');
        }

        $warga->save();

        return redirect()->route('dukcapil.approve.index')->with('success', 'Status berhasil diperbarui.');
    }
}
