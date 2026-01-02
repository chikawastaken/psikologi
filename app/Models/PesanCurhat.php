<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\SesiCurhat;

class PesanCurhat extends Model
{
    use HasFactory;
    protected $fillable = [
        'sesi_curhat_id',
        'sender',
        'isi_pesan',
    ];

    public function sesiCurhat()
    {
        return $this->belongsTo(SesiCurhat::class);
    }
}
