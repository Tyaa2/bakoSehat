<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DataWargaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'tanggal_data_masuk' => $this->faker->date(),
            'nomor_kk' => $this->faker->numerify('############'),
            'nama' => $this->faker->name(),
            'nik' => $this->faker->numerify('################'),
            'tanggal_lahir' => $this->faker->date('Y-m-d', '2005-01-01'),
            'alamat_kk' => $this->faker->address(),
            'nama_kelurahan' => $this->faker->citySuffix(),
            'kecamatan' => $this->faker->city(),
            'created_by' => 4, // ID user Puskesmas 2
            'nama_puskesmas' => 'Puskemas 2',
            'foto_kk' => 'dummy.jpg',
            'surat_keterangan_sakit' => 'dummy_surat.jpg',
        ];
    }
}
