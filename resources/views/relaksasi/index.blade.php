@extends('layouts.app')

@section('content')
<h3>Ruang Relaksasi</h3>

@forelse ($relaksasi as $item)
    <div>
        <strong>{{ $item->judul }}</strong><br>
        <small>Tipe: {{ $item->tipe }}</small><br>
        <a href="/relaksasi/{{ $item->id }}">Lihat Detail</a>
        <hr>
    </div>
@empty
    <p>Belum ada data relaksasi.</p>
@endforelse
@endsection
