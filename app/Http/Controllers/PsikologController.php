<?php

namespace App\Http\Controllers;

use App\Models\Psikolog;
use Illuminate\Http\Request;

class PsikologController extends Controller
{
    public function index(Request $request)
    {
        $query = Psikolog::query();

        if ($request->filled('spesialisasi')) {
            $query->where('spesialisasi', 'like', '%' . $request->spesialisasi . '%');
        }

        if ($request->filled('lokasi')) {
            $query->where('alamat_praktik', 'like', '%' . $request->lokasi . '%');
        }

        $psikolog = $query->get();

        return view('psikolog.index', compact('psikolog'));
    }

    public function show(Psikolog $psikolog)
    {
        return view('psikolog.detail', compact('psikolog'));
    }
}
