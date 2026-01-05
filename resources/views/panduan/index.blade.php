@extends('layouts.app')
@section('title', 'Panduan SERENICA')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/panduan.css') }}">
@endpush

@section('content')
    <section class="guide-hero">
        <h1>Panduan Menggunakan SERENICA</h1>
        <p>
            SERENICA hadir untuk menemani,
            bukan mengatur caramu merasa 🤍
        </p>
    </section>

    <section class="guide-intro">
        <p>
            Kamu tidak harus menggunakan semua fitur.<br>
            Pilih yang paling sesuai dengan kondisimu hari ini.
        </p>
    </section>

    <section class="guide-features">
        <div class="guide-grid">
            <div class="guide-card">
                <span class="guide-icon">📘</span>
                <h3>Edukasi</h3>
                <p>
                    Ruang belajar tentang kesehatan mental dengan bahasa ringan
                    dan visual yang mudah dipahami.
                </p>
                <ul>
                    <li>Artikel singkat & relevan</li>
                    <li>Infografis visual</li>
                    <li>Bisa dibaca pelan-pelan</li>
                </ul>
                <span class="guide-note">
                    Cocok saat ingin memahami diri
                </span>
            </div>
            <div class="guide-card">
                <span class="guide-icon">💬</span>
                <h3>Curhat</h3>
                <p>
                    Tempat aman untuk menuliskan isi hati tanpa takut dihakimi.
                    Semua ceritamu bersifat pribadi.
                </p>
                <ul>
                    <li>Privat & aman</li>
                    <li>Tanpa penilaian</li>
                    <li>Bisa kapan saja</li>
                </ul>
                <span class="guide-note">
                    Cocok saat hati terasa penuh
                </span>
            </div>
            <div class="guide-card">
                <span class="guide-icon">🎧</span>
                <h3>Relaksasi</h3>
                <p>
                    Musik dan audio yang dirancang untuk membantu
                    menenangkan pikiran dan tubuh.
                </p>
                <ul>
                    <li>Audio relaksasi</li>
                    <li>Musik penenang</li>
                    <li>Membantu fokus & istirahat</li>
                </ul>
                <span class="guide-note">
                    Cocok saat lelah mental
                </span>
            </div>
            <div class="guide-card">
                <span class="guide-icon">🧠</span>
                <h3>Psikolog</h3>
                <p>
                    Informasi untuk membantu kamu mengenal
                    dukungan profesional jika dibutuhkan.
                </p>
                <ul>
                    <li>Rekomendasi bantuan profesional</li>
                    <li>Bukan pengganti terapi</li>
                    <li>Langkah awal mencari bantuan</li>
                </ul>
                <span class="guide-note">
                    Cocok saat butuh pendampingan lanjut
                </span>
            </div>
        </div>
    </section>

    <section class="guide-closing">
        <p>
            Tidak ada urutan yang benar.<br>
            Kamu bebas memulai dari mana saja 🌱
        </p>
    </section>

@endsection
