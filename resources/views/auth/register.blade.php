@extends('layouts.auth')
@section('title', 'Register')
@section('content')

<div class="auth-layout">

    <div class="auth-side-left">
        <h2>WELCOME</h2>
        <p>
            Tempat aman untuk memulai.<br>
            Tidak perlu tergesa.
        </p>
    </div>

    <div class="auth-side-right">

        <div class="auth-brand">
            <h1>SERENICA</h1>
        </div>

        <h3 class="auth-title">Mulai perjalananmu</h3>
        <p class="auth-subtitle">
            Tidak perlu sempurna. Cukup jadi dirimu hari ini 
        </p>

        <form method="POST" action="/register" class="auth-form">
            @csrf

            <div class="form-group">
                <input 
                    type="text" 
                    name="nickname" 
                    placeholder="Nama panggilan"
                    value="{{ old('nickname') }}"
                    class="@error('nickname') input-error @enderror"
                    required
                >

                @error('nickname')
                    <small class="field-error">
                        Nama ini sudah dipakai. Kita cari yang lain ya 
                    </small>
                @enderror
            </div>

            <div class="form-group">
                <input 
                    type="password" 
                    name="password" 
                    placeholder="Kata sandi (min. 6 karakter)"
                    class="@error('password') input-error @enderror"
                    required>

                @error('password')
                    <small class="field-error">
                        Kata sandi perlu sedikit lebih panjang supaya aman 
                    </small>
                @enderror
            </div>

            <div class="form-group">
                <input 
                    type="password" 
                    name="password_confirmation" 
                    placeholder="Ulangi kata sandi"
                    required
                >

                @error('password_confirmation')
                    <small class="field-error">
                        Kata sandinya belum sama 
                    </small>
                @enderror
            </div>

            <button type="submit">Mulai</button>
        </form>

        <p class="auth-switch">
            Sudah punya akun?
            <a href="/login">Masuk</a>
        </p>

    </div>
</div>

@endsection
