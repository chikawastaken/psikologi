@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<h3>Register</h3>

<form method="POST" action="/register">
    @csrf
    <input name="nickname" placeholder="Nickname"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="password" name="password_confirmation" placeholder="Ulangi Password"><br><br>
    <button type="submit">Register</button>
</form>

<p><a href="/login">Sudah punya akun?</a></p>
@endsection
