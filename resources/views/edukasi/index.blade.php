@extends('layouts.app')

@section('title', 'Edukasi')

@section('content')
<h3>Menu Edukasi</h3>

@foreach ($edukasi as $item)
    <div>
        <strong>{{ $item->judul }}</strong><br>
        <small>Kategori: {{ $item->kategori_edu }}</small><br>
        <a href="/edukasi/{{ $item->id }}">Lihat Detail</a>
        <hr>
    </div>
@endforeach
@endsection
