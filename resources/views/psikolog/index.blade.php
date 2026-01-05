@extends('layouts.app')

@section('title', 'Daftar Psikolog')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/psikolog.css') }}">
@endpush

@section('content')

<section class="psikolog-container">
    <div class="psikolog-header">
        <h1>Temukan Psikolog Profesional</h1>
        <p>
            Referensi tenaga profesional untuk membantu kamu
            mengambil langkah yang tepat 🌱
        </p>
    </div>
    <div class="psikolog-grid">
        @foreach ($psikolog as $item)
            <div class="psikolog-card">

                <div class="psikolog-avatar">
                    🧑‍⚕️
                </div>

                <div class="psikolog-info">
                    <h3>{{ $item->nama_psikolog }}</h3>
                    <span class="badge">{{ $item->spesialisasi }}</span>

                    <p class="lokasi">
                        📍 {{ $item->alamat_praktik }}
                    </p>
                </div>

                <a href="/psikolog/{{ $item->id }}" class="btn-detail">
                    Lihat Detail
                </a>

            </div>
        @endforeach
    </div>
    <p class="psikolog-disclaimer">
        SERENICA tidak menyediakan layanan konsultasi atau penjadwalan.
        Informasi psikolog ditampilkan sebagai referensi awal bagi pengguna.
    </p>


    <div class="psikolog-action">
        <a href="/homepage" class="psikolog-back">
            ← Kembali ke Homepage
        </a>
    </div>

</section>

@endsection
