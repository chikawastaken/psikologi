<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Psikolog;

class PsikologSeeder extends Seeder
{
    public function run(): void
    {
        Psikolog::create([
            'nama_psikolog' => 'Dr. Aulia, M.Psi',
            'spesialisasi' => 'Psikologi Klinis',
            'alamat_praktik' => 'Yogyakarta',
            'no_telp' => '081234567890',
            'deskripsi' => 'Berpengalaman menangani stres dan kecemasan.',
        ]);
    }
}
