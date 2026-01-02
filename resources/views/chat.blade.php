@extends('layout')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="chat-container">
    <div id="chat-box" class="chat-box"></div>

    <div id="typing" class="typing" style="display:none;">
        Psikolog sedang mengetik...
    </div>

    <div class="input-area">
        <input id="input" placeholder="Katakan semuanya, ceritakan segalanya..." autocomplete="off" />
        <button onclick="send()">Kirim</button>
    </div>
</div>

<style>
.chat-container { max-width: 700px; margin: 40px auto; }
.chat-box {
    background: #fff; padding: 15px; height: 420px; overflow-y: auto;
    border-radius: 8px; border: 1px solid #ddd;
}
.msg { margin-bottom: 10px; white-space: pre-wrap; }
.user { text-align: right; color: #333; }
.bot { text-align: left; color: #2c7be5; }
.typing { margin: 6px 0; font-style: italic; color: #666; }
.input-area { display: flex; gap: 6px; margin-top: 10px; }
input { flex: 1; padding: 10px; }
button { padding: 10px 14px; }
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
        append('bot', data.reply ?? 'Maaf, belum ada jawaban.');
    } catch (e) {
        append('bot', 'Maaf, terjadi kesalahan koneksi. Coba lagi ya.');
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
