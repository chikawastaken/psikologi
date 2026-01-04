@extends('layouts.app')

@section('title', 'Detail Psikolog')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/psikolog.css') }}">
@endpush

@section('content')

<section class="psikolog-detail-container">

    <a href="/psikolog" class="back-link">← Kembali ke Daftar Psikolog</a>

    <div class="psikolog-detail-card">

        <div class="psikolog-avatar-big">
            🧑‍⚕️
        </div>

        <h2>{{ $psikolog->nama_psikolog }}</h2>

        <span class="badge">
            {{ $psikolog->spesialisasi }}
        </span>

        <p class="psikolog-desc">
            {{ $psikolog->deskripsi ?? 'Belum ada deskripsi.' }}
        </p>

        <div class="psikolog-info-list">
            <p>📍 <strong>Alamat Praktik:</strong><br>
                {{ $psikolog->alamat_praktik }}
            </p>

            <p>📞 <strong>Kontak:</strong><br>
                {{ $psikolog->no_telp }}
            </p>
        </div>

    </div>

    <p class="psikolog-disclaimer">
        SERENICA tidak menyediakan layanan konsultasi atau penjadwalan.
        Informasi ini ditampilkan sebagai referensi awal.
    </p>

</section>

@endsection
