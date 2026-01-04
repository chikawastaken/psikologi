{{-- @extends('layouts.app')

@section('title', 'Detail Edukasi')

@section('content')
<h3>{{ $edukasi->judul }}</h3>

<p><strong>Kategori:</strong> {{ $edukasi->kategori_edu }}</p>

@if ($edukasi->isi_edu)
    <p>{{ $edukasi->isi_edu }}</p>
@endif

@if ($edukasi->gambar)
    <p>File gambar: {{ $edukasi->gambar }}</p>
@endif

@if ($edukasi->kategori_edu === 'infografis' && $edukasi->gambar)
    <img 
        src="{{ asset($edukasi->gambar) }}" 
        alt="Infografis Edukasi"
        style="max-width:100%; height:auto;"
    >
@endif

<a href="/edukasi">⬅ Kembali</a>
@endsection --}}

@extends('layouts.app')

@section('title', $edukasi->judul)

@push('styles')
<link rel="stylesheet" href="{{ asset('css/edukasi.css') }}">
@endpush

@section('content')

<section class="edu-detail">

    <a href="/edukasi" class="edu-back">← Kembali ke Edukasi</a>

    <h1 class="edu-detail-title">{{ $edukasi->judul }}</h1>

    <span class="edu-badge">
        {{ ucfirst($edukasi->kategori_edu) }}
    </span>

    @if ($edukasi->isi_edu)
        <div class="edu-detail-content">
            {!! nl2br(e($edukasi->isi_edu)) !!}
        </div>
    @endif
    
    @if ($edukasi->link_artikel)
        <div class="edu-external">
            <p>
                Ingin membaca versi lengkap dari sumber resmi?
            </p>

            <a 
                href="{{ $edukasi->link_artikel }}" 
                target="_blank"
                rel="noopener"
                class="edu-external-btn"
            >
                Baca selengkapnya →
            </a>
        </div>
    @endif

    @if ($edukasi->kategori_edu === 'infografis' && $edukasi->gambar)
        <div class="edu-image">
            <img 
                src="{{ asset($edukasi->gambar) }}" 
                alt="Infografis Edukasi"
            >
        </div>
    @endif

</section>

@endsection

