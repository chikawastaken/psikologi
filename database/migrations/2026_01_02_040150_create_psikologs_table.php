<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('psikologs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_psikolog');
            $table->string('spesialisasi');
            $table->string('alamat_praktik');
            $table->string('no_telp');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('psikologs');
    }
};
