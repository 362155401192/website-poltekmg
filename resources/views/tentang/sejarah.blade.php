@extends('layouts.app')

@section('title', 'Sejarah')

@section('content')
<div class="container py-5">

    <!-- JUDUL -->
    <div class="text-center mb-5">
        <span class="badge bg-primary fs-5 px-4 py-2 mb-3">SEJARAH</span>
        <h1 class="fw-bold mt-3">Sejarah Politeknik Mitra Global </h1>
        <p class="text-muted fs-5 mt-2">
            Perjalanan dan perkembangan Kampus dalam menjawab tantangan zaman
        </p>
    </div>

    <!-- KONTEN -->
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="card shadow-sm border-0">
                <div class="card-body p-4 p-md-5">

                    <!-- TIMELINE ITEM -->
                    <div class="d-flex mb-4">
                        <div class="me-4 text-primary fs-2">
                            <i class="bi bi-flag"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Awal Berdirinya Jurusan</h5>
                            <p class="text-muted mb-0">
                                Jurusan Bisnis dan Informatika didirikan sebagai
                                respon terhadap perkembangan teknologi informasi
                                dan kebutuhan dunia industri yang semakin
                                kompetitif. Sejak awal berdiri, jurusan ini
                                berkomitmen menghasilkan lulusan yang kompeten,
                                inovatif, dan berkarakter.
                            </p>
                        </div>
                    </div>

                    <hr>

                    <!-- TIMELINE ITEM -->
                    <div class="d-flex mb-4">
                        <div class="me-4 text-success fs-2">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Masa Pengembangan</h5>
                            <p class="text-muted mb-0">
                                Pada tahap awal, jurusan ini hanya memiliki
                                beberapa program studi dengan jumlah mahasiswa
                                terbatas. Seiring waktu, jurusan terus
                                berkembang dari sisi kurikulum, sumber daya
                                manusia, serta sarana dan prasarana pendukung.
                            </p>
                        </div>
                    </div>

                    <hr>

                    <!-- TIMELINE ITEM -->
                    <div class="d-flex mb-4">
                        <div class="me-4 text-warning fs-2">
                            <i class="bi bi-people"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Kolaborasi & Inovasi</h5>
                            <p class="text-muted mb-0">
                                Dengan dukungan tenaga pengajar profesional
                                serta kerja sama dengan berbagai mitra industri,
                                jurusan mampu beradaptasi terhadap perubahan
                                teknologi dan tuntutan zaman melalui pembaruan
                                kurikulum berbasis kebutuhan industri.
                            </p>
                        </div>
                    </div>

                    <hr>

                    <!-- TIMELINE ITEM -->
                    <div class="d-flex">
                        <div class="me-4 text-danger fs-2">
                            <i class="bi bi-award"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Komitmen Berkelanjutan</h5>
                            <p class="text-muted mb-0">
                                Hingga saat ini, Jurusan Bisnis dan Informatika
                                terus berupaya meningkatkan mutu pendidikan,
                                penelitian, dan pengabdian kepada masyarakat
                                sebagai wujud nyata dukungan terhadap visi
                                institusi dan pembangunan nasional.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
