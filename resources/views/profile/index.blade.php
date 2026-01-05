@extends('layouts.app')

@section('title', 'Profil Saya')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endpush

@section('content')

<section class="profile-container">

    <div class="profile-header">
        <h1>Profil Pengguna</h1>
        <p>
            Ringkasan perjalananmu di SERENICA 🤍  
            Tidak harus sempurna, yang penting kamu hadir.
        </p>
    </div>

    <div class="profile-card">
        <div class="profile-avatar">
            {{ strtoupper(substr($user->nickname, 0, 1)) }}
        </div>

        <div class="profile-info">
            <span class="profile-label">Nickname</span>
            <h2>{{ $user->nickname }}</h2>
        </div>
    </div>

    <div class="profile-section">
        <h3>Ringkasan Aktivitas</h3>

        <div class="profile-stats single">
            <div class="stat-card">
                <span class="stat-number">{{ $jumlahSesi }}</span>
                <span class="stat-label">Sesi Curhat yang Pernah Dibuka</span>
            </div>
        </div>
    </div>

    <div class="profile-insight">
        <p>
            ✨ Setiap sesi curhat yang kamu buka adalah bentuk keberanian.  
            Terima kasih sudah berani hadir dan jujur pada dirimu sendiri.
        </p>
    </div>

    <div class="profile-action-group">

        <a href="/profile/edit-nickname" class="profile-action-btn">
            Ubah Nickname
        </a>

        <a href="/profile/edit-password" class="profile-action-btn secondary">
            Ganti Password
        </a>
    </div>

</section>

@endsection
