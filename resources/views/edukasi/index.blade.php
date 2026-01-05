@extends('layouts.app')
@section('title', 'Pusat Edukasi')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/edukasi.css') }}">
@endpush

@section('content')

<section class="edu-container">

    <div class="edu-header">
        <h1>Pusat Edukasi Kesehatan Mental</h1>
        <p>
            Ruang belajar yang aman untuk memahami perasaan,
            pikiran, dan kesehatan mentalmu 🤍
        </p>
    </div>

    <div class="edu-highlight">
        <div class="edu-highlight-text">
            <h3>Kamu tidak sendirian</h3>
            <p>
                Setiap perasaan itu valid. Di sini kamu bisa membaca,
                memahami, dan mengenali kondisi mental tanpa penilaian.
            </p>
        </div>
        <div class="edu-highlight-icon">💙</div>
    </div>

    <div class="edu-section">
        <h2>Artikel</h2>

        <div class="edu-grid">
            @foreach ($edukasi->where('kategori_edu', 'artikel') as $item)
                <a href="/edukasi/{{ $item->id }}" class="edu-card">
                    <h4>{{ $item->judul }}</h4>

                    <p>
                        {{ \Illuminate\Support\Str::limit(strip_tags($item->isi_edu), 100) }}
                    </p>

                    <span class="edu-link">
                        Baca detail →
                    </span>
                </a>
            @endforeach
        </div>
    </div>

    <div class="edu-section">
        <h2>Infografis</h2>

        <div class="edu-infogrid">
            @foreach ($edukasi->where('kategori_edu', 'infografis') as $item)
                <a href="/edukasi/{{ $item->id }}" class="info-card">
          
                    <div class="info-thumb">
                        @if ($item->gambar)
                            <img src="{{ asset($item->gambar) }}" alt="{{ $item->judul }}">
                        @endif
                    </div>

                    <div class="info-content">
                        <span class="info-tag">INFOGRAFIS</span>

                        <h3 class="info-title">
                            {{ $item->judul }}
                        </h3>

                        <p class="info-meta">
                            Klik untuk melihat detail visual
                        </p>
                    </div>

                </a>
            @endforeach
        </div>
    </div>

    <div class="edu-action">
        <a href="/homepage" class="edu-back">
            ← Kembali ke Homepage
        </a>
    </div>

</section>

@endsection
