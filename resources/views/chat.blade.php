@extends('layouts.app')

@section('title', 'Ngobrol yuk!')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="sky">
    <div class="sun"></div>

    <div class="cloud c1"></div>
    <div class="cloud c2"></div>
    <div class="cloud c3"></div>
    <div class="cloud c4"></div>
    <div class="cloud c5"></div>
</div>

<div class="chat-wrapper">
    <div class="chat-header">
        <h2>Hari ini gimana?</h2>
        <p class="subtitle">
            Ruang aman untuk bercerita tanpa penghakiman.
            Kamu tidak harus kuat hari ini.
        </p>
    </div>

    <div id="chat-box" class="chat-box">
        <div class="msg bot">
            <div class="avatar">S</div>
            <div class="bubble">
                Halo, aku Serenica. Aku ada di sini untuk menemani kamu.
            </div>
        </div>
    </div>

    <div id="typing" class="typing" style="display:none;">
        Serenica sedang mengetik<span class="dots"></span>
    </div>

    <div class="input-area">
        <input id="input" placeholder="Katakan semuanya, aku mendengarkan..." autocomplete="off" />
        <button onclick="send()">➤</button>
    </div>
</div>

<style>
body {
    background: linear-gradient(to bottom, #eef2ff, #ffffff);
}

.sky {
    position: fixed;
    inset: 0;
    overflow: hidden;
    z-index: -1;
}

.sun {
    position: absolute;
    top: 40px;
    right: 60px;
    width: 90px;
    height: 90px;
    background: radial-gradient(circle at center, #fff7a3, #ffd54f);
    border-radius: 50%;
    box-shadow:
        0 0 40px rgba(255,213,79,0.6),
        0 0 80px rgba(255,213,79,0.4);
    animation: pulse 4s ease-in-out infinite;
}

@keyframes pulse {
    0% { transform: scale(1); opacity: 0.9; }
    50% { transform: scale(1.05); opacity: 1; }
    100% { transform: scale(1); opacity: 0.9; }
}

.cloud {
    position: absolute;
    background: #ffffff;
    border-radius: 50px;
    opacity: 0.85;
    filter: blur(1px);
}

.cloud::before,
.cloud::after {
    content: '';
    position: absolute;
    background: #ffffff;
    border-radius: 50%;
}

.cloud::before {
    width: 60%;
    height: 60%;
    top: -30%;
    left: 10%;
}

.cloud::after {
    width: 50%;
    height: 50%;
    top: -20%;
    right: 15%;
}

.c1 { width: 180px; height: 60px; top: 18%; left: -200px; animation: move 60s linear infinite; }
.c2 { width: 220px; height: 70px; top: 32%; left: -300px; animation: move 80s linear infinite; }
.c3 { width: 140px; height: 50px; top: 50%; left: -150px; animation: move 50s linear infinite; }
.c4 { width: 200px; height: 65px; top: 65%; left: -250px; animation: move 90s linear infinite; }
.c5 { width: 160px; height: 55px; top: 80%; left: -180px; animation: move 70s linear infinite; }

@keyframes move {
    from { transform: translateX(0); }
    to { transform: translateX(140vw); }
}

.chat-wrapper {
    max-width: 720px;
    margin: 40px auto 80px;
}

.chat-header {
    text-align: center;
    margin-bottom: 18px;
}

.subtitle {
    color: #6b7280;
    font-size: 0.95rem;
}

.chat-box {
    background: rgba(255,255,255,0.9);
    backdrop-filter: blur(8px);
    padding: 20px;
    height: 420px;
    overflow-y: auto;
    border-radius: 20px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.08);
}

.msg {
    display: flex;
    gap: 10px;
    margin-bottom: 14px;
}

.avatar {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: #6b6be8;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
}

.bubble {
    max-width: 75%;
    padding: 12px 14px;
    border-radius: 16px;
    background: #f1f3f7;
    color: #333;
}

.msg.user {
    justify-content: flex-end;
}

.msg.user .bubble {
    background: #e8e7ff;
    border-top-right-radius: 4px;
}

.msg.bot .bubble {
    border-top-left-radius: 4px;
}

.typing {
    margin: 8px;
    font-style: italic;
    color: #777;
    font-size: 0.9rem;
}

.dots::after {
    content: '';
    animation: dots 1.5s infinite;
}

@keyframes dots {
    0% { content: ''; }
    33% { content: '.'; }
    66% { content: '..'; }
    100% { content: '...'; }
}

.input-area {
    display: flex;
    gap: 10px;
    margin-top: 14px;
}

.input-area input {
    flex: 1;
    padding: 14px 16px;
    border-radius: 14px;
    border: 1px solid #d1d5db;
    font-size: 0.95rem;
}

.input-area input:focus {
    outline: none;
    border-color: #6b6be8;
}

.input-area button {
    padding: 0 22px;
    border-radius: 14px;
    border: none;
    background: #6b6be8;
    color: #fff;
    font-size: 1.1rem;
    cursor: pointer;
}

.input-area button:hover {
    background: #5a5ad6;
}
</style>

<script>
async function send() {
    const input = document.getElementById('input');
    const text = input.value.trim();
    if (!text) return;

    append('user', text);
    input.value = '';
    showTyping(true);

    try {
        const res = await fetch("{{ route('chat.send') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({ message: text })
        });
        const data = await res.json();
        append('bot', data.reply ?? 'Aku di sini.');
    } catch {
        append('bot', 'Aku tetap di sini.');
    } finally {
        showTyping(false);
        scrollBottom();
    }
}

function append(role, text) {
    const box = document.getElementById('chat-box');
    const div = document.createElement('div');
    div.className = 'msg ' + role;

    if (role === 'bot') {
        div.innerHTML = '<div class="avatar">S</div><div class="bubble"></div>';
    } else {
        div.innerHTML = '<div class="bubble"></div>';
    }

    div.querySelector('.bubble').textContent = text;
    box.appendChild(div);
    scrollBottom();
}

function showTyping(show) {
    document.getElementById('typing').style.display = show ? 'block' : 'none';
}

function scrollBottom() {
    const box = document.getElementById('chat-box');
    box.scrollTop = box.scrollHeight;
}

document.getElementById('input').addEventListener('keydown', e => {
    if (e.key === 'Enter') send();
});
</script>
@endsection
