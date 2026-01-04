@extends('layouts.app')

@section('title', 'Ubah Nickname')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endpush

@section('content')

<section class="profile-container">

    <div class="profile-header">
        <h1>Ubah Nickname</h1>
        <p>
            Pilih nama yang paling nyaman mewakili dirimu 🤍
        </p>
    </div>

    <form action="/profile/edit-nickname" method="POST" class="profile-card">
        @csrf

        <div class="profile-info">
            <label class="profile-label">Nickname Baru</label>
            <input 
                type="text" 
                name="nickname" 
                value="{{ old('nickname', $user->nickname) }}"
                required
                class="profile-input"
            >

            @error('nickname')
                <p class="error-text">{{ $message }}</p>
            @enderror
        </div>

        <div class="profile-action-group">
            <button type="submit" class="profile-action-btn">
                Simpan Perubahan
            </button>

            <a href="/profile" class="profile-action-btn secondary">
                Batal
            </a>
        </div>
    </form>

</section>

@endsection
