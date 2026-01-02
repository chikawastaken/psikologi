<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Relaksasi;

class RelaksasiSeeder extends Seeder
{
    public function run(): void
    {
        Relaksasi::create([
            'judul' => 'Panduan Pemulihan Diri',
            'tipe' => 'buku',
            'deskripsi' => 'Buku panduan sederhana untuk pemulihan kesehatan mental.',
            'file_path' => 'buku/buku-pemulihan.pdf',
        ]);

        Relaksasi::create([
            'judul' => 'Musik Relaksasi',
            'tipe' => 'musik',
            'deskripsi' => 'Musik terapi untuk membantu relaksasi dan ketenangan.',
            'file_path' => 'musik/musik-relaksasi.mp3',
        ]);
    }
}
