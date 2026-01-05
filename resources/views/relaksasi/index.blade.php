@extends('layouts.app')

@section('title', 'Ruang Relaksasi')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/relaksasi.css') }}">
@endpush

@section('content')

<section class="relax-container">

    <div class="relax-header">
        <h1>Ruang Relaksasi</h1>
        <p>
            Temukan dukungan melalui literasi, dan musik
            yang dikurasi sesuai kondisi emosionalmu hari ini.
        </p>
    </div>

    <div class="relax-section">
        <h2>📚 Literasi Pemulihan</h2>

        <div class="relax-grid">
            @foreach ($relaksasi->where('tipe', 'buku') as $item)
                <a href="/relaksasi/{{ $item->id }}" class="relax-card">

                    <h3>{{ $item->judul }}</h3>
                    <p>{{ Str::limit($item->deskripsi, 90) }}</p>

                    <span class="relax-link">Baca →</span>
                </a>
            @endforeach
        </div>
    </div>

    <div class="relax-section">
        <h2>🎧 Audio Terapi & Musik</h2>

        <div class="relax-grid">
            @foreach ($relaksasi->where('tipe', 'musik') as $item)
                <a href="/relaksasi/{{ $item->id }}" class="relax-card">

                    <h3>{{ $item->judul }}</h3>
                    <p>{{ Str::limit($item->deskripsi, 90) }}</p>

                    <span class="relax-link">Dengarkan →</span>
                </a>
            @endforeach
        </div>
    </div>

    <div class="relax-action">
        <a href="/homepage" class="relax-back">
            ← Kembali ke Homepage
        </a>
    </div>

</section>

@endsection
