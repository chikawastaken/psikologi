<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Psikolog extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama_psikolog',
        'spesialisasi',
        'alamat_praktik',
        'no_telp',
        'deskripsi',
    ];
}
