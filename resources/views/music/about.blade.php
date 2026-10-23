@extends('layouts.app')

@section('title', 'Tentang - Direktori Musik Tradisional')

@section('content')
<div class="card border-0 shadow-sm rounded-4 overflow-hidden my-3 position-relative text-white">
    <!-- Background Banner Estetik -->
    <img src="{{ asset('assets/images/banner_uts.jpeg') }}" class="card-img w-100 opacity-75" style="height: 100%; min-height: 520px; object-fit: cover;" alt="Banner Tentang">
    
    <div class="card-img-overlay d-flex flex-column justify-content-center p-4 p-md-5" style="background: rgba(0, 0, 0, 0.75);">
        <div class="max-w-4xl mx-auto">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill mb-3 fw-semibold shadow-sm">Tentang & History Portal</span>
            <h2 class="fw-bold mb-3 text-white display-6">Mengenal Lebih Dekat Warisan Seni & Musik Tradisional Nusantara</h2>
            
            <p class="text-light lh-base mb-3 fs-6">
                Indonesia dikaruniai keanekaragaman budaya yang luar biasa dari Sabang sampai Merauke. Salah satu warisan leluhur yang paling berharga dan sarat akan nilai filosofis adalah <strong>Seni Musik Tradisional</strong>. Platform <strong>Nusantara Harmony</strong> hadir sebagai direktori digital interaktif yang didedikasikan khusus untuk mendokumentasikan, merawat, dan memperkenalkan berbagai instrumen musik tradisional khas Nusantara kepada masyarakat luas melalui platform berbasis web modern.
            </p>
            
            <div class="row g-3 my-3">
                <div class="col-md-6">
                    <div class="p-3 rounded-3 bg-white bg-opacity-10 border border-light border-opacity-25 h-100">
                        <h6 class="fw-bold text-warning mb-2">🎯 Visi & Misi Pelestarian</h6>
                        <p class="small text-light mb-0">Menjadi pusat data digital terpadu yang memuat informasi akurat mengenai asal-daerah, jenis instrumen, seniman, hingga sejarah di balik terciptanya suatu karya musik etnik tradisional.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 rounded-3 bg-white bg-opacity-10 border border-light border-opacity-25 h-100">
                        <h6 class="fw-bold text-warning mb-2">💡 Peran Generasi Digital</h6>
                        <p class="small text-light mb-0">Memanfaatkan teknologi web modern agar kekayaan seni lokal tidak lekang oleh waktu dan tetap dapat diakses dengan mudah oleh pelajar, peneliti, maupun pecinta seni.</p>
                    </div>
                </div>
            </div>

            <p class="text-light opacity-85 small mb-4 pt-2 border-top border-light border-opacity-25">
                Proyek web katalog ini disusun dan dikembangkan secara mandiri guna memenuhi Ujian Tengah Semester (UTS) mata kuliah <strong>Rekayasa Web</strong> pada Program Studi Sistem Informasi S-1, Fakultas Ilmu Komputer, Universitas Pamulang.
            </p>

            <!-- Tombol Navigasi Kembali ke Beranda & Katalog -->
            <div class="d-flex flex-wrap gap-3">
                <a href="{{ route('music.home') }}" class="btn btn-outline-light rounded-pill px-4 py-2 fw-semibold shadow-sm">&larr; Kembali ke Beranda</a>
                <a href="{{ route('music.index') }}" class="btn btn-warning rounded-pill px-4 py-2 fw-bold text-dark shadow-sm">Lihat Katalog Musik &rarr;</a>
            </div>
        </div>
    </div>
</div>
@endsection