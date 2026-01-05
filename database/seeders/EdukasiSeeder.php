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
            'judul' => 'Pentingnya Self-Care bagi Kesehatan Mental Remaja',
            'kategori_edu' => 'artikel',
            'isi_edu' => 'Artikel ini membahas pentingnya praktik self-care bagi remaja untuk menjaga kesehatan mental, seperti mengatur waktu istirahat, mengenali emosi, dan menjaga keseimbangan antara aktivitas digital dan kehidupan nyata.',
            'link_artikel' => 'https://www.alodokter.com/pentingnya-self-care-untuk-kesehatan-mental'
        ]);

        Edukasi::create([
            'judul' => 'Pulih Dari Cemas',
            'kategori_edu' => 'infografis',
            'gambar' => 'infografis/4.jpg',
        ]);

        Edukasi::create([
            'judul' => 'Remaja Keren Peduli Mental Health',
            'kategori_edu' => 'infografis',
            'gambar' => 'infografis/3.jpg',
        ]);

        Edukasi::create([
            'judul' => 'Senyum Bisa Bohong',
            'kategori_edu' => 'infografis',
            'gambar' => 'infografis/1.jpg',
        ]);

        Edukasi::create([
            'judul' => 'Pentingnya Menjaga Kesehatan Mental',
            'kategori_edu' => 'infografis',
            'gambar' => 'infografis/02.jpg',
        ]);
    }
}
