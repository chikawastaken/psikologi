<?php

namespace App\Http\Controllers;

use App\Models\Psikolog;

class PsikologController extends Controller
{
    public function index()
        {
            $psikolog = Psikolog::all();
            return view('psikolog.index', compact('psikolog'));
        }

    public function show($id)
        {
            $psikolog = Psikolog::findOrFail($id);
            return view('psikolog.detail', compact('psikolog'));
        }
}
