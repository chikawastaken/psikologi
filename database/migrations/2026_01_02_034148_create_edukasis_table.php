<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('edukasis', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('isi_edu')->nullable();
            $table->enum('kategori_edu', ['artikel','infografis']);
            $table->string('link_artikel')->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps();
        });

    }
    public function down(): void
    {
        Schema::dropIfExists('edukasis');
    }
};
