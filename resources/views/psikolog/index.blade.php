@extends('layouts.app')

@section('title', 'Psikolog')

@section('content')
<h3>Daftar Psikolog</h3>

@foreach ($psikolog as $item)
    <div>
        <strong>{{ $item->nama }}</strong><br>
        <small>Spesialis: {{ $item->spesialisasi }}</small><br>
        <a href="/psikolog/{{ $item->id }}">Lihat Detail</a>
        <hr>
    </div>
@endforeach
@endsection
