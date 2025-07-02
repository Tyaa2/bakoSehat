<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExportHistory;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataWargaExport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ExportController extends Controller
{
    public function export(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $user = Auth::user();
        $role = $user->role;

        $exportData = new DataWargaExport($role, $request->start_date, $request->end_date, $user->id);

        $collection = $exportData->collection();

        if ($collection->isEmpty()) {
            return back()->with('error', 'Tidak ada data untuk diekspor pada rentang tanggal tersebut.');
        }

        $downloadCode = 'EXP-' . now()->format('Ymd') . '-' . strtoupper(Str::random(6));
        $filename = "{$role}_export_" . now()->format('Ymd_His') . '.xlsx';
        $filePath = 'exports/' . $filename;

        // Simpan file ke storage/app/public/exports
        Excel::store($exportData, $filePath, 'public');

        ExportHistory::create([
            'user_id' => $user->id,
            'role' => $role,
            'download_code' => $downloadCode,
            'filename' => $filename,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        // Langsung download ke browser
        return response()->download(storage_path("app/public/{$filePath}"));
    }

    public function history()
    {
        $search = request('search');

        $query = ExportHistory::where('user_id', Auth::id());

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('download_code', 'like', "%{$search}%")
                    ->orWhere('filename', 'like', "%{$search}%")
                    ->orWhereRaw("DATE_FORMAT(start_date, '%d-%m-%Y') LIKE ?", ["%{$search}%"])
                    ->orWhereRaw("DATE_FORMAT(end_date, '%d-%m-%Y') LIKE ?", ["%{$search}%"])
                    ->orWhereRaw("DATE_FORMAT(created_at, '%d-%m-%Y') LIKE ?", ["%{$search}%"]);
            });
        }
        $histories = ExportHistory::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        $histories = $query->latest()->paginate(10)->withQueryString();

        //masukkan auth untuk data export history dinkes.data-warga.export_history
        $role = Auth::user()->role;

if ($role === 'dukcapil') {
    $view = 'dukcapil.approve.export_history';
} elseif ($role === 'dinkes') {
    $view = 'dinkes.data-warga.export_history';
} else {
    $view = $role . '.datawarga.export_history';
}

        return view($view, compact('histories'));
    }

    public function download($filename)
    {
        $path = storage_path("app/public/exports/{$filename}");

        if (!file_exists($path)) {
            return redirect()->back()->with('error', 'File tidak ditemukan.');
        }

        return response()->download($path);
    }

    public function delete($id)
    {
        $history = ExportHistory::findOrFail($id);
        if ($history->user_id !== Auth::id()) {
            abort(403);
        }

        $path = storage_path("app/public/exports/{$history->filename}");
        if (file_exists($path)) {
            unlink($path);
        }

        $history->delete();

        return back()->with('success', 'Riwayat dihapus.');
    }
}
