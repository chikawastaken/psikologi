@extends('layouts.app')

@section('title', 'Hidup Nowo')

@section('content')

<section class="hero">
    <img src="{{ asset('images/logo.png') }}" class="hero-logo">

    <h2>Himpunan Penjilat Nowo</h2>

    <p class="hero-text">
        NOWO JOGJA NOWO JOGJA NOWO JOGJA NOWO JOGJA NOWO JOGJA
        NOWO JOGJA NOWO JOGJA NOWO JOGJA NOWO JOGJA
    </p>
</section>

<section class="menu-section">
    <h3>Silakan Pilih Menu</h3>

    <div class="menu-grid">
        <x-menu-card title="EDUKASI DAN SOLUSI" />
        <x-menu-card title="CURHAT" />
        <x-menu-card title="REFLEKSI" />
        <x-menu-card title="LOKASI PSIKOLOG" />
    </div>
</section>

<div class="banner">
    PADA INTINYA SAJA HIDUP NOWO
</div>

@endsection