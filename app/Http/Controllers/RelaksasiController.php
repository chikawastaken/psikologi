<?php

namespace App\Http\Controllers;

use App\Models\Relaksasi;

class RelaksasiController extends Controller
{
    public function index()
        {
            $relaksasi = Relaksasi::all();
            return view('relaksasi.index', compact('relaksasi'));
        }

    public function show($id)
        {
            $relaksasi = Relaksasi::findOrFail($id);
            return view('relaksasi.detail', compact('relaksasi'));
        }

}
