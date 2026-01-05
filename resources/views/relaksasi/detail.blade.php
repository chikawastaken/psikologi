@extends('layouts.app')

@section('title', $relaksasi->judul)

@push('styles')
<link rel="stylesheet" href="{{ asset('css/relaksasi.css') }}">
@endpush

@section('content')

<section class="relax-detail">

    <a href="/relaksasi" class="relax-back">← Kembali ke Ruang Relaksasi</a>

    <h1 class="relax-title">{{ $relaksasi->judul }}</h1>

    <span class="relax-badge">
        {{ ucfirst($relaksasi->tipe) }}
    </span>

    <p class="relax-desc">
        {{ $relaksasi->deskripsi }}
    </p>

    @if ($relaksasi->tipe === 'buku')
        <div class="relax-media">
            <a 
                href="{{ asset($relaksasi->file_path) }}" 
                target="_blank"
                class="relax-btn"
            >
                📖 Buka Buku
            </a>
        </div>
    @endif

    @if ($relaksasi->tipe === 'musik')
        <div class="relax-media">
            <audio controls>
                <source src="{{ asset($relaksasi->file_path) }}" type="audio/mpeg">
                Browser kamu tidak mendukung audio.
            </audio>
        </div>
    @endif

</section>

@endsection
