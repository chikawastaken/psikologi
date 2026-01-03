<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\SesiCurhat;
use App\Models\PesanCurhat;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $jumlahSesi = SesiCurhat::where('user_id', $user->id)->count();

        $jumlahPesan = PesanCurhat::whereHas('sesiCurhat', function ($q) use ($user) {
            $q->where('user_id', $user->id);
        })->count();

        return view('profile.index', compact(
            'user',
            'jumlahSesi',
            'jumlahPesan'
        ));
    }
}
