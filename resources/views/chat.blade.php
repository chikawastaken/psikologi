@extends('layouts.app')

@section('title', 'Ngobrol yuk!')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="chat-bg"></div>

<div class="chat-wrapper">
    <div class="chat-header">
        <h2>Hari ini gimana?</h2>
        <p class="subtitle">
            Ruang aman untuk bercerita tanpa penghakiman.
            Kamu tidak harus kuat hari ini.
        </p>
    </div>

    <div id="chat-box" class="chat-box">
        <div class="msg bot intro">
            <div class="avatar">S</div>
            <div class="bubble">
                Halo, aku Serenica.  
                Aku ada di sini untuk menemani kamu.
            </div>
        </div>
    </div>

    <div id="typing" class="typing" style="display:none;">
        Serenica sedang mengetik<span class="dots"></span>
    </div>

    <div class="input-area">
        <input
            id="input"
            placeholder="Katakan semuanya, aku mendengarkan..."
            autocomplete="off"
        />
        <button onclick="send()" aria-label="Kirim">
            ➤
        </button>
    </div>
</div>

<style>
.chat-bg {
    position: fixed;
    inset: 0;
    background: radial-gradient(circle at top, #eef2ff, #f9fafb);
    z-index: -1;
}

.chat-wrapper {
    max-width: 720px;
    margin: 40px auto 80px;
}

.chat-header {
    text-align: center;
    margin-bottom: 22px;
}

.chat-header h2 {
    margin-bottom: 6px;
}

.subtitle {
    color: #6b7280;
    font-size: 0.95rem;
}

.chat-box {
    background: rgba(255,255,255,0.9);
    backdrop-filter: blur(6px);
    padding: 20px;
    height: 420px;
    overflow-y: auto;
    border-radius: 18px;
    border: 1px solid #e5e7eb;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

.msg {
    display: flex;
    gap: 10px;
    margin-bottom: 14px;
    font-size: 0.95rem;
    line-height: 1.45;
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
    flex-shrink: 0;
}

.bubble {
    max-width: 75%;
    padding: 12px 14px;
    border-radius: 14px;
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
    margin: 8px 6px;
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
    padding: 13px 16px;
    border-radius: 12px;
    border: 1px solid #d1d5db;
    font-size: 0.95rem;
    background: #fff;
}

.input-area input:focus {
    outline: none;
    border-color: #6b6be8;
}

.input-area button {
    padding: 0 20px;
    border-radius: 12px;
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
        append('bot', data.reply ?? 'Aku di sini, kamu boleh lanjut cerita.');
    } catch (e) {
        append('bot', 'Aku masih di sini, tarik napas sebentar ya.');
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
        div.querySelector('.bubble').textContent = text;
    } else {
        div.innerHTML = '<div class="bubble"></div>';
        div.querySelector('.bubble').textContent = text;
    }

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
