@extends('layout')

@section('content')
<h2>Layanan Psikolog Anonim</h2>

@if($chats->count() === 0)
    <p>Silakan ceritakan keluhan Anda. Tidak perlu login.</p>
@endif

@foreach ($chats as $chat)
    <p class="user">User:</p>
    <p>{{ $chat->user_message }}</p>

    <p class="ai">Psikolog AI:</p>
    <p>{{ $chat->ai_response }}</p>
    <hr>
@endforeach

<form method="POST" action="/send">
    @csrf
    <textarea name="message" placeholder="Tulis keluhan Anda di sini..." required></textarea>
    <br>
    <button type="submit">Kirim</button>
</form>
@endsection

