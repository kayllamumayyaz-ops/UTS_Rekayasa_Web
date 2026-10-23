@extends('layouts.app')

@section('title', 'Detail - ' . $music->title)

@section('content')
<div class="mb-4">
    <a href="{{ route('music.index') }}" class="btn btn-outline-dark btn-sm rounded-pill px-3 shadow-sm">&larr; Kembali ke Katalog</a>
</div>

<div class="card border-0 shadow-sm rounded-4 overflow-hidden p-4 p-md-5 bg-white">
    <div class="row align-items-center g-4">
        <!-- Kolom Gambar -->
        <div class="col-md-5">
            <div class="bg-light rounded-4 d-flex align-items-center justify-content-center p-3 border" style="height: 320px;">
                <img src="{{ asset('assets/images/' . $music->audio_file) }}" class="rounded-3 shadow-sm m-auto" style="max-height: 100%; max-width: 100%; object-fit: contain;" alt="{{ $music->title }}">
            </div>
        </div>

        <!-- Kolom Informasi Detail -->
        <div class="col-md-7">
            <div class="mb-2">
                <span class="badge bg-dark text-white px-3 py-1 rounded-pill">{{ $music->region }}</span>
            </div>
            
            <h2 class="fw-bold text-dark mb-3">{{ $music->title }}</h2>
            
            <table class="table table-borderless mb-3 small">
                <tr>
                    <td class="text-muted fw-medium ps-0" style="width: 130px;">Instrumen</td>
                    <td class="fw-bold text-dark">: {{ $music->instrument }}</td>
                </tr>
                <tr>
                    <td class="text-muted fw-medium ps-0">Seniman / Tokoh</td>
                    <td class="fw-bold text-dark">: {{ $music->artist }}</td>
                </tr>
                <tr>
                    <td class="text-muted fw-medium ps-0">Tahun Rilis</td>
                    <td class="fw-bold text-dark">: {{ $music->release_year }}</td>
                </tr>
            </table>

            <div class="border-top pt-3">
                <h6 class="fw-bold text-dark mb-2">Deskripsi Karya</h6>
                <p class="text-muted lh-base mb-0 small">{{ $music->description }}</p>
            </div>
        </div>
    </div>
</div>
@endsection