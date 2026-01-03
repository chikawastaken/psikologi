<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Edukasi;

class EdukasiSeeder extends Seeder
{
    public function run(): void
    {
        Edukasi::create([
            'judul' => 'Mengelola Stres Sehari-hari',
            'kategori_edu' => 'artikel',
            'isi_edu' => 'Artikel ini membahas cara sederhana mengelola stres dalam kehidupan sehari-hari.',
        ]);

        Edukasi::create([
            'judul' => 'Tips Relaksasi',
            'kategori_edu' => 'infografis',
            'gambar' => 'infografis/infografis1.webp',
        ]);
    }
}
