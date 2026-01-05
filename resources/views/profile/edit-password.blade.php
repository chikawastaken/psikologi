@extends('layouts.app')
@section('title', 'Ganti Password')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endpush

@section('content')

<section class="profile-container">
    <div class="profile-header">
        <h1>Ganti Password</h1>
        <p>
            Demi keamanan akunmu, pastikan password baru mudah diingat tapi aman 🔐
        </p>
    </div>
    <form action="/profile/edit-password" method="POST" class="profile-card">
        @csrf
        <div class="profile-info">
            <label class="profile-label">Password Lama</label>
            <input type="password" name="current_password" required class="profile-input">
            @error('current_password')
                <p class="error-text">{{ $message }}</p>
            @enderror
        </div>
        <div class="profile-info">
            <label class="profile-label">Password Baru</label>
            <input type="password" name="password" required class="profile-input">
        </div>
        <div class="profile-info">
            <label class="profile-label">Konfirmasi Password Baru</label>
            <input type="password" name="password_confirmation" required class="profile-input">
        </div>
        <div class="profile-action-group">
            <button type="submit" class="profile-action-btn">
                Perbarui Password
            </button>
            <a href="/profile" class="profile-action-btn secondary">
                Batal
            </a>
        </div>
    </form>

</section>

@endsection
