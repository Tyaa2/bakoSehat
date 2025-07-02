<?php

namespace App\Exports;

use App\Models\DataWarga;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataWargaExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    protected $role, $start, $end, $userId;

    public function __construct($role, $start, $end, $userId)
    {
        $this->role = $role;
        $this->start = $start;
        $this->end = $end;
        $this->userId = $userId;
    }

    public function collection()
    {
        $query = DataWarga::whereBetween('tanggal_data_masuk', [$this->start, $this->end]);

        // Jika puskesmas, kelurahan, atau rsud, filter data yang mereka input sendiri
        if (in_array($this->role, ['puskesmas', 'kelurahan', 'rsud'])) {
            $query->where('created_by', $this->userId);
        }

        switch ($this->role) {
            case 'kelurahan':
                return $query->get(['updated_at', 'nama', 'nik', 'tanggal_lahir', 'alamat_kk', 'nama_kelurahan', 'kecamatan', 'nomor_kk', 'alasan_penolakan_kelurahan']);
            case 'dinkes':
                return $query->get(['updated_at', 'nama', 'nik', 'tanggal_lahir', 'alamat_kk', 'nama_kelurahan', 'kecamatan', 'nomor_kk', 'tanggal_masuk_pasien', 'tanggal_keluar_pasien', 'alasan_penolakan_kelurahan', 'alasan_penolakan_dukcapil', 'alasan_penolakan_dinkes', 'status_approve_dinkes']);
            case 'puskesmas':
                return $query->get(['updated_at', 'nama', 'nik', 'tanggal_lahir', 'alamat_kk', 'nama_kelurahan', 'kecamatan', 'nomor_kk', 'tanggal_masuk_pasien', 'tanggal_keluar_pasien', 'alasan_penolakan_kelurahan', 'alasan_penolakan_dukcapil', 'alasan_penolakan_dinkes', 'status_approve_dinkes']);
            case 'rsud':
                return $query->get(['updated_at', 'nama', 'nik', 'tanggal_lahir', 'alamat_kk', 'nama_kelurahan', 'kecamatan', 'nomor_kk', 'tanggal_masuk_pasien', 'tanggal_keluar_pasien', 'alasan_penolakan_kelurahan', 'alasan_penolakan_dukcapil', 'alasan_penolakan_dinkes', 'status_approve_dinkes']);
            case 'dukcapil':
                return $query->get(['updated_at', 'nama', 'nik', 'tanggal_lahir', 'alamat_kk', 'nama_kelurahan', 'kecamatan', 'nomor_kk', 'alasan_penolakan_kelurahan']);
            default:
                return collect();
        }
    }

    public function headings(): array
    {
        return array_keys($this->collection()->first()?->toArray() ?? []);
    }
}
