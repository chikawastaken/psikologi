@extends('layouts.app')

@section('title', 'Detail Relaksasi')

@section('content')
<h3>{{ $relaksasi->judul }}</h3>

<p>{{ $relaksasi->deskripsi }}</p>
<p>File: {{ $relaksasi->file_path }}</p>

<a href="/relaksasi">⬅ Kembali</a>
@endsection
