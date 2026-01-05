<?php

namespace App\Http\Controllers;

use App\Models\Edukasi;

class EdukasiController extends Controller
{
    public function index()
        {
            $edukasi = Edukasi::all();
            return view('edukasi.index', compact('edukasi'));
        }
        
    public function show($id)
        {
            $edukasi = Edukasi::findOrFail($id);
            return view('edukasi.detail', compact('edukasi'));
        }

}
