@extends('layouts.app')

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
@endsection
