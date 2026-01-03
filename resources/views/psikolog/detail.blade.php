@extends('layouts.app')

@section('title', 'Detail Psikolog')

@section('content')
<h3>{{ $psikolog->nama }}</h3>
<p><strong>Spesialisasi:</strong> {{ $psikolog->spesialisasi }}</p>
<p><strong>Lokasi:</strong> {{ $psikolog->alamat_praktik }}</p>
<p><strong>PL :</strong> {{ $psikolog->deskripsi }}</p>
<a href="/psikolog">⬅ Kembali</a>
@endsection
