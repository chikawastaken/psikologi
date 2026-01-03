@extends('layouts.app')

@section('title', 'Login')

@section('content')
<h3>Login</h3>

@if ($errors->any())
    <p style="color:red">{{ $errors->first() }}</p>
@endif

<form method="POST" action="/login">
    @csrf
    <input name="nickname" placeholder="Nickname"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <button type="submit">Login</button>
</form>

<p><a href="/register">Belum punya akun?</a></p>
@endsection
