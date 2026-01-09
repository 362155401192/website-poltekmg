@extends('layouts.app')

@section('title', $berita->judul)

@section('content')
<<div class="container pt-1 pb-5">

    <div class="row justify-content-center">
        <div class="col-lg-9">

            <!-- CARD BERITA -->
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4 p-md-5">

                    <!-- META -->
                    <div class="mb-3 text-muted small">
                        <i class="bi bi-calendar-event"></i>
                        {{ $berita->created_at->format('d M Y') }}
                    </div>

                    <!-- JUDUL -->
                    <h1 class="fw-bold mb-4">
                        {{ $berita->judul }}
                    </h1>

                    <!-- FOTO -->
                    @if(!empty($berita->foto))
                        <div class="mb-4">
                            <img src="{{ asset('storage/'.$berita->foto) }}"
                                 class="img-fluid rounded"
                                 alt="{{ $berita->judul }}">
                        </div>
                    @endif

                    <hr class="mb-4">

                    <!-- KONTEN -->
                    <div class="berita-content fs-5" style="line-height:1.9">
                        {!! $berita->konten !!}
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection
