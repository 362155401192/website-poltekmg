@extends('layouts.admin')

@section('content')
<h3 class="mb-4">Dashboard</h3>

<div class="row">

    <div class="col-md-3">
        <div class="card text-white bg-primary mb-3">
            <div class="card-body">
                <h5>Program Studi</h5>
                <h2>{{ $totalProdi }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card text-white bg-success mb-3">
            <div class="card-body">
                <h5>Berita</h5>
                <h2>{{ $totalBerita }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card text-white bg-warning mb-3">
            <div class="card-body">
                <h5>Prestasi</h5>
                <h2>{{ $totalPrestasi }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card text-white bg-dark mb-3">
            <div class="card-body">
                <h5>User</h5>
                <h2>{{ $totalUser }}</h2>
            </div>
        </div>
    </div>

</div>

<div class="card mt-4">
    <div class="card-body">
        <h5>Selamat Datang 👋</h5>
        <p>Anda login sebagai <strong>{{ auth()->user()->name }}</strong></p>
    </div>
</div>
@endsection
