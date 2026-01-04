@extends('layouts.app')

@section('title', 'Ruang Refleksi')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/relaksasi.css') }}">
@endpush

@section('content')

<section class="relax-container">

    {{-- HEADER --}}
    <div class="relax-header">
        <h1>Ruang Refleksi</h1>
        <p>
            Temukan dukungan melalui literasi, musik, dan aktivitas
            yang dikurasi sesuai kondisi emosionalmu hari ini.
        </p>
    </div>

    {{-- LITERASI --}}
    <div class="relax-section">
        <h2>📚 Literasi Pemulihan</h2>

        <div class="relax-grid">
            @foreach ($relaksasi->where('tipe', 'buku') as $item)
                <a href="/relaksasi/{{ $item->id }}" class="relax-card">
                    <div class="relax-icon">📘</div>

                    <h3>{{ $item->judul }}</h3>
                    <p>{{ Str::limit($item->deskripsi, 90) }}</p>

                    <span class="relax-link">Baca panduan →</span>
                </a>
            @endforeach
        </div>
    </div>

    {{-- MUSIK --}}
    <div class="relax-section">
        <h2>🎧 Audio Terapi & Musik</h2>

        <div class="relax-grid">
            @foreach ($relaksasi->where('tipe', 'musik') as $item)
                <a href="/relaksasi/{{ $item->id }}" class="relax-card">
                    <div class="relax-icon">🎵</div>

                    <h3>{{ $item->judul }}</h3>
                    <p>{{ Str::limit($item->deskripsi, 90) }}</p>

                    <span class="relax-link">Dengarkan →</span>
                </a>
            @endforeach
        </div>
    </div>

</section>

@endsection
