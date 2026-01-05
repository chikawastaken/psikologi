<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GptService;
use Illuminate\Support\Facades\Auth;
use App\Models\SesiCurhat;

class ChatController extends Controller
{
    public function index()
    {
        if (Auth::check() && !session()->has('sesi_curhat_id')) {
        $sesi = SesiCurhat::create([
            'user_id' => Auth::id(),
        ]);

        session()->put('sesi_curhat_id', $sesi->id);
        }

        return view('chat');
    }

    public function send(Request $request, GptService $gpt)
    {
        $request->validate([
            'message' => 'required|string|max:2000',
        ]);

        // Ambil konteks lama
        $context = session()->get('chat_context', []);

        // Tambah pesan user
        $context[] = [
            'role' => 'user',
            'content' => $request->message,
        ];
        session()->put('chat_context', $context);

        // Panggil GPT (NON STREAM)
        $reply = $gpt->ask($context);

        // Simpan jawaban ke konteks
        $context[] = [
            'role' => 'assistant',
            'content' => $reply,
        ];
        session()->put('chat_context', $context);

        return response()->json([
            'reply' => $reply,
        ]);
    }

}
