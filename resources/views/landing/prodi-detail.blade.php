@extends('layouts.app')

@section('title', $prodi->nama)

@section('content')
<div class="container pt-3 pb-5" style="max-width: 1000px; margin-top:-20px">

    <!-- HEADER PRODI -->
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body p-4 p-md-5">

            <div class="row align-items-center g-4">
                <div class="col-md-8">
                    <span class="badge bg-primary mb-2 px-3 py-2 fs-6">
                        PROGRAM STUDI
                    </span>

                    <h1 class="fw-bold mb-2">
                        {{ $prodi->nama }}
                    </h1>

                    <p class="text-muted fs-5 mb-0">
                        Kode Program Studi:
                        <strong>{{ $prodi->kode }}</strong>
                    </p>
                </div>

                @if ($prodi->foto)
                <div class="col-md-4 text-center">
                    <img src="{{ asset('storage/' . $prodi->foto) }}"
                         class="img-fluid rounded shadow-sm"
                         style="max-height:220px; object-fit:cover;">
                </div>
                @endif
            </div>

        </div>
    </div>

    <!-- DESKRIPSI -->
    <div class="card border-0 shadow-sm">
        <div class="card-body p-4 p-md-5">

            <h4 class="fw-bold mb-3">
                <i class="bi bi-book"></i> Deskripsi Program Studi
            </h4>

            <div class="fs-5" style="line-height:1.9">
                {!! nl2br(e($prodi->deskripsi)) !!}
            </div>

        </div>
    </div>

</div>
@endsection
