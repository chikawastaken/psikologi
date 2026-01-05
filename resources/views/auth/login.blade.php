@extends('layouts.auth')
@section('title', 'Login')
@section('content')

<div class="auth-layout">

    <div class="auth-side-left">
        <h2>WELCOME BACK</h2>
        <p>
            Ruang aman untuk kembali.<br>
            Cerita boleh pelan-pelan.
        </p>
    </div>

    <div class="auth-side-right">

        <div class="auth-brand">
            <h1>SERENICA</h1>
        </div>

        <h3 class="auth-title">Selamat datang kembali</h3>
        <p class="auth-subtitle">
            Kami senang kamu di sini. Ambil napas sebentar, lalu masuk untuk memulai
        </p>

        <form method="POST" action="/login" class="auth-form">
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
                        Nama panggilan belum sesuai. Coba cek lagi yaa
                    </small>
                @enderror
            </div>

            <div class="form-group">
                <input 
                    type="password" 
                    name="password" 
                    placeholder="Kata sandi"
                    class="@error('password') input-error @enderror"
                    required>

                @error('password')
                    <small class="field-error">
                        Kata sandinya belum tepat. Tidak apa-apa, coba lagi 
                    </small>
                @enderror
            </div>

            <button type="submit">Masuk</button>
        </form>

        <p class="auth-switch">
            Belum punya akun?
            <a href="/register">Mulai dari sini</a>
        </p>

    </div>
</div>

@endsection
