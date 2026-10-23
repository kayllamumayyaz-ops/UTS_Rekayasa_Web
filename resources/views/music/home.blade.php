@extends('layouts.app')

@section('title', 'Beranda - Direktori Musik Tradisional')

@section('content')
<!-- Banner Utama -->
<div class="card mb-5 border-0 shadow-sm rounded-4 overflow-hidden position-relative bg-dark text-white text-center">
    <img src="{{ asset('assets/images/banner_uts.jpeg') }}" class="card-img w-100 opacity-50" style="height: 450px; object-fit: cover;" alt="Banner UTS">
    
    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center p-4">
        <span class="badge bg-warning text-dark px-3 py-2 rounded-pill mb-2 fw-semibold">UTS Rekayasa Web</span>
        <h1 class="display-4 fw-bold mb-2 text-uppercase text-white" style="letter-spacing: 1px;">Direktori Musik Tradisional</h1>
        <p class="text-light mb-3 fs-5">Selamat datang di portal eksplorasi warisan budaya dan instrumen musik tradisional Nusantara</p>
        
        <hr class="w-25 my-3 border-light opacity-75">

        <div class="text-light small lh-lg mb-4">
            <p class="mb-0 fw-bold fs-6 text-warning">Kaylla Mumayyaz</p>
            <p class="mb-0">251011700014</p>
            <p class="mb-0">Prodi Sistem Informasi S-1 • Universitas Pamulang</p>
            <p class="mb-0 text-light opacity-75">Dosen Pengampu: Afif Efendi, S.Kom., M.Kom.</p>
        </div>

        <a href="{{ route('music.index') }}" class="btn btn-warning px-4 py-2 rounded-pill fw-bold text-dark shadow-sm">Jelajahi Katalog Musik &rarr;</a>
    </div>
</div>

<!-- ================= TAMBAHAN SECTION ESTETIK DI BAWAH BANNER ================= -->
<div class="row g-4 mb-5 text-center">
    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white">
            <div class="mb-3">
                <span class="fs-1">🎶</span>
            </div>
            <h5 class="fw-bold text-dark">Koleksi Nusantara</h5>
            <p class="text-muted small mb-0">Menyediakan berbagai macam instrumen alat musik tradisional dari Sabang sampai Merauke dengan informasi lengkap.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white">
            <div class="mb-3">
                <span class="fs-1">📜</span>
            </div>
            <h5 class="fw-bold text-dark">Nilai Filosofis</h5>
            <p class="text-muted small mb-0">Setiap alat musik menyimpan sejarah, makna adat, serta identitas budaya leluhur yang sarat akan nilai kearifan lokal.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white">
            <div class="mb-3">
                <span class="fs-1">💻</span>
            </div>
            <h5 class="fw-bold text-dark">Platform Modern</h5>
            <p class="text-muted small mb-0">Dibangun menggunakan framework Laravel dan Bootstrap 5 secara interaktif, responsif, serta estetis.</p>
        </div>
    </div>
</div>
@endsection