@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
<h3>Selamat Datang 👋</h3>
<p>Silakan pilih menu utama:</p>

<ul>
    <li><a href="/edukasi">📘 Edukasi</a></li>
    <li><a href="/relaksasi">🎧 Relaksasi</a></li>
    <li><a href="/psikolog">🧑‍⚕️ Psikolog</a></li>
    <li><a href="/chat">💬 Curhat</a></li>
</ul>
@endsection
