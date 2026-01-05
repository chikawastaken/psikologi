<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\SesiCurhat;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('profile.index', [
            'user' => $user,
            'jumlahSesi' => SesiCurhat::where('user_id', $user->id)->count(),
        ]);
    }

    public function editNickname()
    {
        return view('profile.edit-nickname', [
            'user' => Auth::user(),
        ]);
    }

    public function updateNickname(Request $request)
    {
        $request->validate([
            'nickname' => 'required|string|min:3|max:20',
        ]);

        $user = Auth::user();
        $user->nickname = $request->nickname;
        $user->save();

        return redirect('/profile')
            ->with('success', 'Nickname berhasil diperbarui');
    }

    public function editPassword()
    {
        return view('profile.edit-password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors([
                'current_password' => 'Password lama tidak sesuai.',
            ]);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/profile')
            ->with('success', 'Password berhasil diperbarui');
    }
}
