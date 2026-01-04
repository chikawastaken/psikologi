<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Edukasi;

class EdukasiSeeder extends Seeder
{
    public function run(): void
    {
        Edukasi::create([
            'judul' => 'Generasi Z dan Tantangan Kesehatan Mental',
            'kategori_edu' => 'artikel',
            'isi_edu' => 'Artikel ini membahas tantangan kesehatan mental yang dihadapi Generasi Z, termasuk tekanan sosial, akademik, dan penggunaan media digital.',
            'link_artikel' => 'https://rs.ui.ac.id/umum/berita-artikel/artikel-populer/generasi-gelisah-tantangan-kesehatan-mental-generasi-z-dan-milenial'
        ]);

        Edukasi::create([
            'judul' => 'Isu Kesehatan Mental',
            'kategori_edu' => 'infografis',
            'gambar' => 'infografis/infografis1.webp',
        ]);

        Edukasi::create([
            'judul' => 'Isu Kesehatan Mental',
            'kategori_edu' => 'infografis',
            'gambar' => 'infografis/04.webp',
        ]);

        Edukasi::create([
            'judul' => 'Isu Kesehatan Mental',
            'kategori_edu' => 'infografis',
            'gambar' => 'infografis/03.webp',
        ]);

        Edukasi::create([
            'judul' => 'Isu Kesehatan Mental',
            'kategori_edu' => 'infografis',
            'gambar' => 'infografis/02.jpg',
        ]);
    }
}
