@extends('layouts.app')

@section('title','Visi & Misi')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <!-- VISI -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body p-4 p-md-5 text-center">
                    <div class="mb-3">
                        <span class="badge bg-primary px-4 py-2 fs-4 fw-bold">
                            VISI
                        </span>
                    </div>
                    <h2 class="fw-bold mb-3">
                        Menjadi Perguruan Tinggi Vokasi Unggul
                    </h2>
                    <p class="fs-5 text-muted">
                        Menjadi perguruan tinggi vokasi yang <strong>unggul dan berdaya saing</strong>
                        dalam pengembangan sumber daya manusia yang
                        <strong>profesional, inovatif, dan berkarakter</strong>,
                        serta mampu menjawab kebutuhan dunia usaha dan industri.
                    </p>
                </div>
            </div>

            <!-- MISI -->
            <div class="card shadow-sm border-0">
                <div class="card-body p-4 p-md-5">
                    <div class="text-center mb-4">
                        <span class="badge bg-success px-4 py-2 fs-4 fw-bold">
                            MISI
                        </span>
                    </div>

                    <div class="row g-4 fs-5">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <div class="me-3 fs-2 text-success">✔</div>
                                <p class="mb-0">
                                    Menyelenggarakan pendidikan vokasi berbasis
                                    <strong>praktik, teknologi, dan kebutuhan industri</strong>.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <div class="me-3 fs-2 text-success">✔</div>
                                <p class="mb-0">
                                    Menghasilkan lulusan yang
                                    <strong>kompeten, profesional, dan berdaya saing</strong>.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <div class="me-3 fs-2 text-success">✔</div>
                                <p class="mb-0">
                                    Mengembangkan <strong>kerja sama strategis</strong>
                                    dengan dunia usaha dan industri.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <div class="me-3 fs-2 text-success">✔</div>
                                <p class="mb-0">
                                    Melaksanakan <strong>penelitian terapan</strong> dan
                                    <strong>pengabdian kepada masyarakat</strong>.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


@endsection
