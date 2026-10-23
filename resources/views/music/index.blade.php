@extends('layouts.app')

@section('title', 'Katalog Musik Tradisional')

@section('content')
<!-- Tombol Navigasi Kembali ke Beranda di Bagian Atas -->
<div class="d-flex justify-content-between align-items-center mb-4 pt-2">
    <div>
        <h3 class="fw-bold text-dark m-0">🎵 Katalog Instrumen Tradisional</h3>
        <span class="text-muted small">Menampilkan koleksi alat musik Nusantara</span>
    </div>
    <div>
        <a href="{{ route('music.home') }}" class="btn btn-outline-dark btn-sm rounded-pill px-3 shadow-sm">&larr; Kembali ke Beranda</a>
    </div>
</div>

<!-- Grid Daftar Produk / Katalog -->
<div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
    @foreach($musics as $item)
    <div class="col">
        <div class="card h-100 shadow-sm bg-white border-0 rounded-4 overflow-hidden">
            <div class="bg-light d-flex align-items-center justify-content-center p-3" style="height: 230px;">
                <img src="{{ asset('assets/images/' . $item->audio_file) }}" class="rounded-3 shadow-sm m-auto" style="max-height: 100%; max-width: 100%; object-fit: contain;" alt="{{ $item->title }}">
            </div>
            <div class="card-body d-flex flex-column p-4">
                <div class="mb-2">
                    <span class="badge bg-light text-dark border px-2 py-1">{{ $item->region }}</span>
                </div>
                <h5 class="card-title fw-bold text-dark mb-2">{{ $item->title }}</h5>
                <p class="card-text text-muted small mb-3"><strong>Instrumen:</strong> {{ $item->instrument }}</p>
                
                <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
                    <span class="text-secondary small">Rilis: {{ $item->release_year }}</span>
                    <a href="{{ route('music.show', $item->id) }}" class="btn btn-dark btn-sm px-3 rounded-pill">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Tombol Navigasi Lanjut ke Halaman Tentang di Bagian Bawah -->
<div class="card bg-dark text-white border-0 shadow-sm rounded-4 p-4 text-center my-5">
    <div class="py-2">
        <h5 class="fw-bold mb-2">Ingin tahu lebih banyak tentang portal ini?</h5>
        <p class="text-light small mb-3 opacity-75">Pelajari sejarah, visi, serta latar belakang pembuatan direktori musik ini.</p>
        <a href="{{ route('music.about') }}" class="btn btn-warning px-4 py-2 rounded-pill fw-bold text-dark shadow-sm">Lanjut ke Halaman Tentang &rarr;</a>
    </div>
</div>
@endsection