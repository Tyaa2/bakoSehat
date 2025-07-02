<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataWarga extends Model
    
{
    use HasFactory;
    protected $table = 'data_warga';

    protected $fillable = [
        'tanggal_data_masuk',
        'tanggal_masuk_pasien',
        'tanggal_keluar_pasien',
        'nomor_kk',
        'nama',
        'nik',
        'tanggal_lahir',
        'alamat_kk',
        'nama_kelurahan',
        'kecamatan',
        'foto_ktp',
        'foto_kk',
        'surat_keterangan_sakit',
        'surat_keterangan_domisili',
        'status_approve_dukcapil',
        'status_approve_dinkes',
        'created_by',
        'nama_puskesmas',
        'target_kelurahan_id',
        'alasan_penolakan_dinkes',
        'alasan_penolakan_kelurahan',
        'alasan_penolakan_dukcapil'

    ];

    protected $casts = [
        'tanggal_data_masuk' => 'datetime',
        'tanggal_masuk_pasien' => 'datetime',
        'tanggal_keluar_pasien' => 'datetime',
        'tanggal_lahir' => 'date',
    ];
    
    // udah males bikin cttnnya
    

    // Relasi ke user yang menginput data (Puskesmas)
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    // app/Models/DataWarga.php

public function targetKelurahan()
{
    return $this->belongsTo(User::class, 'target_kelurahan_id');
}

}
