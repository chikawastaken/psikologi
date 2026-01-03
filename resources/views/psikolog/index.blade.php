@extends('layouts.app')
@section('title', 'Psikolog')
@section('content')
<h3>Daftar Psikolog</h3>

    {{-- <table class="table table-bordered"> --}}
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Spesialis</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($psikolog as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_psikolog }}</td>
                <td>{{ $item->spesialisasi }}</td>
                <td>
                    {{-- <a href="{{ route('psikolog.detail', $psikolog->id) }}">Detail Informasi</a> --}}
                    <a href="/psikolog/{{ $item->id }}">Lihat Detail</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    {{-- <div>
        <strong>{{ $item->nama }}</strong><br>
        <small>Spesialis: {{ $item->spesialisasi }}</small><br>
        <a href="/psikolog/{{ $item->id }}">Lihat Detail</a>
        <hr>
    </div> --}}
@endsection
