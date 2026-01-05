

@extends('layouts.app')

@section('title', 'Ngobrol yuk!')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

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
            Halo. Aku di sini untuk mendengarkan.  
            Ceritakan apa pun yang sedang kamu rasakan 🌱
        </div>
    </div>

    <div id="typing" class="typing" style="display:none;">
        Psikolog sedang mengetik<span class="dots"></span>
    </div>

    <div class="input-area">
        <input
            id="input"
            placeholder="Katakan semuanya, ceritakan segalanya..."
            autocomplete="off"
        />
        <button onclick="send()" aria-label="Kirim">
            ➤
        </button>
    </div>
</div>

<style>
/* WRAPPER */
.chat-wrapper {
    max-width: 720px;
    margin: 40px auto 80px;
}

/* HEADER */
.chat-header {
    text-align: center;
    margin-bottom: 20px;
}

.chat-header h2 {
    margin-bottom: 6px;
}

.subtitle {
    color: #666;
    font-size: 0.95rem;
}

/* CHAT BOX */
.chat-box {
    background: #ffffff;
    padding: 18px;
    height: 420px;
    overflow-y: auto;
    border-radius: 14px;
    border: 1px solid #e5e7eb;
    box-shadow: 0 8px 24px rgba(0,0,0,0.04);
}

/* MESSAGE */
.msg {
    max-width: 75%;
    margin-bottom: 12px;
    padding: 10px 14px;
    border-radius: 12px;
    white-space: pre-wrap;
    line-height: 1.4;
    font-size: 0.95rem;
}

/* BOT */
.msg.bot {
    background: #f1f3f7;
    color: #333;
    border-top-left-radius: 4px;
}

/* USER */
.msg.user {
    background: #e8e7ff;
    color: #2b2b2b;
    margin-left: auto;
    border-top-right-radius: 4px;
    text-align: left;
}

/* INTRO */
.msg.intro {
    opacity: 0.9;
}

/* TYPING */
.typing {
    margin: 8px 4px;
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

/* INPUT AREA */
.input-area {
    display: flex;
    gap: 8px;
    margin-top: 12px;
}

.input-area input {
    flex: 1;
    padding: 12px 14px;
    border-radius: 10px;
    border: 1px solid #d1d5db;
    font-size: 0.95rem;
}

.input-area input:focus {
    outline: none;
    border-color: #6b6be8;
}

.input-area button {
    padding: 0 18px;
    border-radius: 10px;
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
                'X-CSRF-TOKEN': document
                    .querySelector('meta[name="csrf-token"]')
                    .content
            },
            body: JSON.stringify({ message: text })
        });

        const data = await res.json();
        append('bot', data.reply ?? 'Aku di sini. Coba ceritakan lagi ya.');
    } catch (e) {
        append('bot', 'Maaf, terjadi gangguan. Tarik napas sebentar, lalu coba lagi.');
    } finally {
        showTyping(false);
        scrollBottom();
    }
}

function append(role, text) {
    const box = document.getElementById('chat-box');
    const div = document.createElement('div');
    div.className = 'msg ' + role;
    div.textContent = text;
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
