<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Relaksasi;

class RelaksasiSeeder extends Seeder
{
    public function run(): void
    {
        Relaksasi::create([
            'judul' => 'Berani Bahagia - Ichiro Kishimi & Fumitake Koga',
            'tipe' => 'buku',
            'deskripsi' => 'Buku pengembangan diri berbasis psikologi Adler yang membahas cara mencapai kebahagiaan sejati melalui dialog filosofis.',
            'file_path' => 'buku/Berani Bahagia - Ichiro Kishimi & Fumitake Koga.pdf',
        ]);

        Relaksasi::create([
            'judul' => 'Evaluasi - Hindia',
            'tipe' => 'musik',
            'deskripsi' => 'Musik dengan nuansa tenang untuk membantu refleksi dan penerimaan diri.',
            'file_path' => 'musik/Evaluasi.mp3',
        ]);
    }
}
