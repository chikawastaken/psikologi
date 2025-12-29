<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ChatController extends Controller
{
    public function index()
    {
        // sementara: collection kosong
        $chats = collect();

        return view('chat', compact('chats'));
    }
}
