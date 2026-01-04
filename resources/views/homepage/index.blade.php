@extends('layouts.app')

@section('title', 'Homepage')

@section('content')

{{-- HERO --}}
<section class="hero">
    <div class="hero-text">
        <h1>Selamat Datang Di SERENICA</h1>
    </div>

    <div class="hero-visual">
        <p>
            SERENICA adalah ruang aman untuk Gen Z mengenal diri,
            memahami kesehatan mental, dan menenangkan pikiran
            tanpa tekanan dan tanpa penghakiman.
        </p>
    </div>
</section>

{{-- PENGANTAR --}}
<section class="intro-section">
    <h2>Ruang Aman untuk Belajar Mengenal Diri 🤍</h2>

    <p>
        SERENICA adalah ruang edukasi dan pendampingan kesehatan mental
        yang awal dibuat untuk Gen Z — tanpa tuntutan, tanpa penghakiman.
    </p>

    <p>
        Di sini, kamu bisa belajar memahami kondisi mentalmu,
        menyalurkan isi hati dengan aman,
        menenangkan pikiran, dan menemukan referensi bantuan profesional
        saat kamu membutuhkannya.
    </p>

    <p class="intro-highlight">
        Kamu tidak harus kuat setiap hari.<br>
        Pelan-pelan juga tidak apa-apa.
    </p>
</section>

{{-- MENU --}}
<section class="menu-section">
    <h2>Silakan Pilih Menu</h2>

    <div class="menu-grid">

        <a href="/edukasi" class="menu-card">
            <h3>📘 Edukasi</h3>
            <p>Kenali dan pahami kesehatan mentalmu</p>
        </a>

        <a href="/chat" class="menu-card">
            <h3>💬 Curhat</h3>
            <p>Ceritakan apa yang kamu rasakan hari ini</p>
        </a>

        <a href="/relaksasi" class="menu-card">
            <h3>🧘 Relaksasi</h3>
            <p>Tarik napas, tenangkan pikiran sejenak</p>
        </a>

        <a href="/psikolog" class="menu-card">
            <h3>🧠 Psikolog</h3>
            <p>Temukan bantuan profesional terdekat</p>
        </a>

    </div>
</section>

@endsection
