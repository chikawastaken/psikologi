@extends('layouts.app')

@section('title', 'Tentang SERENICA')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/tentang.css') }}">
@endpush

@section('content')

<section class="about-hero">
    <h1>Tentang SERENICA</h1>
    <p>
        SERENICA adalah platform edukasi dan pendampingan kesehatan mental yang 
        dirancang sebagai ruang aman bagi Gen Z untuk mengenal diri, 
        memahami kondisi mental, dan menenangkan pikiran tanpa tekanan serta tanpa penghakiman.
        Platform ini hadir sebagai respons atas meningkatnya tantangan kesehatan mental 
        pada generasi muda, seperti stres akademik, kecemasan, burnout, 
        dan kesulitan mengekspresikan emosi yang sering kali tidak terlihat secara kasat mata.
    </p>
</section>

<section class="about-story">
    <h2>Kenapa SERENICA Ada?</h2>

    <p>
        SERENICA berangkat dari kesadaran bahwa banyak anak muda terlihat baik-baik saja di luar,
        tetapi menyimpan kelelahan di dalam.
        Tidak semua orang memiliki ruang untuk bercerita, 
        dan tidak semua cerita perlu dinilai atau dihakimi.
    </p>

    <p>
        Di tengah tuntutan sosial, akademik, dan ekspektasi untuk selalu “kuat”, SERENICA hadir sebagai ruang jeda 
        ,jadi tempat di mana kamu boleh berhenti sejenak, bernapas, dan merasa aman menjadi diri sendiri.
    </p>

    <p class="about-quote">
        Di sini, kamu tidak dituntut untuk kuat.<br>
        <strong>Kamu cukup menjadi manusia.</strong>
    </p>
</section>

<section class="about-values">
    <div class="value-card">
        <span class="value-icon">🤍</span>
        <h3>Aman</h3>
        <p>
            Privasi adalah prioritas.
            Ceritamu adalah milikmu.
        </p>
    </div>

    <div class="value-card">
        <span class="value-icon">🫂</span>
        <h3>Empatik</h3>
        <p>
            Kami mendengar tanpa menghakimi,
            tanpa menggurui.
        </p>
    </div>

    <div class="value-card">
        <span class="value-icon">🌱</span>
        <h3>Bertumbuh</h3>
        <p>
            Pelan-pelan,
            kamu tidak sendirian.
        </p>
    </div>
</section>

@endsection
