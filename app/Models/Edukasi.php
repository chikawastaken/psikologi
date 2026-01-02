<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Edukasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'isi_edu',
        'kategori_edu',
        'link_artikel',
        'gambar',
    ];
}
