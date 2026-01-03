@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
<h2>Selamat Datang 👋</h2>
<p>Silakan pilih fitur yang ingin digunakan:</p>

<ul>
    <li><a href="/edukasi">📘 Edukasi Kesehatan Mental</a></li>
    <li><a href="/relaksasi">🎧 Relaksasi</a></li>
    <li><a href="/psikolog">🧑‍⚕️ Psikolog</a></li>
    <li><a href="/chat">💬 Curhat</a></li>
    <li><a href="/profile">👤 Profile</a></li>
</ul>
@endsection
