<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Psikolog;

class PsikologSeeder extends Seeder
{
    public function run(): void
    {
        Psikolog::create([
            'nama_psikolog' => 'Dr. Aulia Rahman, M.Psi',
            'spesialisasi' => 'Psikologi Klinis',
            'alamat_praktik' => 'Yogyakarta',
            'no_telp' => '081234567890',
            'deskripsi' => 
                'Fokus pada pendampingan individu dewasa muda yang mengalami stres akademik, kecemasan sosial, dan kelelahan emosional. 
                Menggunakan pendekatan empatik dan komunikasi yang aman agar klien merasa didengar dan dipahami.'
        ]);

        Psikolog::create([
            'nama_psikolog' => 'Nadia Putri, M.Psi',
            'spesialisasi' => 'Psikologi Pendidikan',
            'alamat_praktik' => 'Sleman',
            'no_telp' => '082198765432',
            'deskripsi' =>
                'Berpengalaman mendampingi mahasiswa dan pelajar dalam menghadapi tekanan belajar, overthinking, dan penurunan motivasi.
                Pendekatan yang digunakan bersifat suportif dan berbasis refleksi diri.'
        ]);

        Psikolog::create([
            'nama_psikolog' => 'Rizky Pratama, M.Psi',
            'spesialisasi' => 'Psikologi Remaja',
            'alamat_praktik' => 'Kota Yogyakarta',
            'no_telp' => '085712345678',
            'deskripsi' =>
                'Menangani isu kesehatan mental remaja dan Gen Z seperti kecemasan, kesulitan mengekspresikan emosi,
                serta konflik identitas diri. Mengedepankan pendekatan yang ringan dan tidak menghakimi.'
        ]);

        Psikolog::create([
            'nama_psikolog' => 'Dr. Maya Lestari, M.Psi',
            'spesialisasi' => 'Psikologi Konseling',
            'alamat_praktik' => 'Bantul',
            'no_telp' => '087899001122',
            'deskripsi' =>
                'Membantu individu dalam memahami pola emosi, relasi interpersonal, dan pengambilan keputusan hidup.
                Cocok untuk pengguna yang ingin mengenal diri lebih dalam secara bertahap.'
        ]);
    }
}
