@extends('layouts.app')

@section('title', 'Profil Saya')

@section('content')
<h2>Profil Pengguna</h2>

<hr>

<p>
    <strong>Nickname:</strong><br>
    {{ $user->nickname }}
</p>

<hr>

<h3>Ringkasan Aktivitas</h3>

<ul>
    <li>Total sesi curhat: {{ $jumlahSesi }}</li>
    <li>Total pesan curhat: {{ $jumlahPesan }}</li>
</ul>

<hr>

<a href="/homepage">⬅ Kembali ke Homepage</a>
@endsection
