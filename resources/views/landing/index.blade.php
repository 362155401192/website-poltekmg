<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Politeknik Mitra Global</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

    <!-- CSS KAMU -->
    <link rel="stylesheet" href="{{ asset('resource/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

    {{-- ================= TOP BAR ================= --}}
    <div class="bg-primary text-white py-2 small">
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                <i class="bi bi-telephone"></i> (0333) 391 0698
                &nbsp;&nbsp;
                <i class="bi bi-envelope"></i> politeknikmg@gmail.com
            </div>
            <div>
                <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-youtube"></i></a>
                <a href="{{ url('/login') }}" class="text-white me-3" title="Login">
                    <i class="bi bi-box-arrow-in-right"></i>
                </a>
            </div>
        </div>
    </div>

    {{-- ================= NAVBAR ================= --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">

            <<a class="navbar-brand d-flex align-items-center">
                <img src="{{ asset('image/logo.png') }}" height="45" class="me-2" alt="Logo">
                <strong>POLITEKNIK<br>MITRA GLOBAL</strong>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav mx-auto gap-lg-3">

                        <li class="nav-item">
                            <a class="nav-link active" href="/">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link active" href="#tentang-kami">
                                Tentang Kami
                            </a>
                            {{-- <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Profil</a></li>
                                <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
                            </ul> --}}
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                Program Studi
                            </a>
                            <ul class="dropdown-menu">
                                @foreach ($prodis as $prodi)
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            {{ $prodi->nama }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#berita">Artikel Berita</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link active" href="#kerjasama">
                                Mitra Kerjasama
                            </a>
                            {{-- <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Industri</a></li>
                                <li><a class="dropdown-item" href="#">Akademik</a></li>
                            </ul> --}}
                        </li>
                    </ul>

                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSedZeRdjNqHiqwzjlP6SfhMsz3JLrJkZfoEUkBM03KDPOWHJQ/viewform"
                        target="_blank" rel="noopener noreferrer" class="btn btn-primary text-white fw-semibold px-4">
                        Pendaftaran
                    </a>

                </div>

        </div>
    </nav>

    {{-- ================= HERO ================= --}}
    <section class="hero-section text-white text-center d-flex align-items-center">
        <div class="hero-overlay w-100">
            <div class="container">
                <h1 class="fw-bold display-5">Politeknik Mitra Global</h1>
                <p class="lead mt-3">
                    Website resmi informasi akademik dan kegiatan kampus
                </p>

                <a href="#tentang-kami" class="btn btn-warning mt-4 px-4 fw-semibold">
                    Selengkapnya
                </a>
            </div>
        </div>
    </section>

    <style>
        .hero-section {
            background: url("{{ asset('image/wisuda.jpg') }}") center center / cover no-repeat;
            min-height: 75vh;
        }

        .hero-overlay {
            background: rgba(0, 0, 0, 0.55);
            padding: 200px 0;
        }
    </style>

    <!-- ================= TENTANG KAMI ================= -->
    <section id="tentang-kami" class="py-5">
        <div class="container">
            <div class="row align-items-center">

                <!-- TEKS -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <h3 class="fw-bold mb-3">Tentang Kami</h3>
                    <p class="text-muted">
                        <strong>Politeknik Mitra Global</strong> adalah institusi pendidikan tinggi
                        vokasi yang berfokus pada pengembangan keterampilan dan kompetensi mahasiswa.
                    </p>

                    <p class="text-muted">
                        Kami berkomitmen menyelenggarakan pendidikan berbasis praktik dan industri.
                    </p>

                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="bi bi-check-circle-fill text-primary"></i>
                            Pendidikan berbasis praktik
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-check-circle-fill text-primary"></i>
                            Dosen profesional
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-check-circle-fill text-primary"></i>
                            Kerja sama industri
                        </li>
                    </ul>

                    <!-- BUTTON MODAL -->
                    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal"
                        data-bs-target="#modalTentangKami">
                        Baca Selengkapnya
                    </button>
                </div>

                <!-- GAMBAR -->
                <div class="col-md-6 text-center">
                    <img src="image/pmg1.jpeg" alt="Politeknik Mitra Global" class="img-fluid rounded shadow">
                </div>

            </div>
        </div>
    </section>

    <!-- ================= MODAL TENTANG KAMI ================= -->
    <div class="modal fade" id="modalTentangKami" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Tentang Politeknik Mitra Global</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="row align-items-center">

                        <!-- GAMBAR -->
                        <div class="col-md-5 mb-3 mb-md-0 text-center">
                            <img src="image/pmg1.jpeg" alt="Politeknik Mitra Global"
                                class="img-fluid rounded shadow">
                        </div>

                        <!-- TEKS -->
                        <div class="col-md-7">
                            <p>
                                <strong>Politeknik Mitra Global</strong> merupakan perguruan tinggi
                                vokasi yang fokus pada pendidikan berbasis praktik dan industri.
                            </p>

                            <p>
                                Didukung oleh dosen profesional, kurikulum adaptif,
                                serta kerja sama luas dengan mitra industri.
                            </p>

                            <p>
                                VISI :
                            </p>

                            <p>
                                MISI :
                            </p>

                            <ul>
                                <li>Pendidikan berbasis praktik</li>
                                <li>Tenaga pengajar profesional</li>
                                <li>Kerja sama dunia industri</li>
                                <li>Program magang & penyaluran kerja</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">
                        Tutup
                    </button>
                </div>

            </div>
        </div>
    </div>


    {{-- ================= PROGRAM STUDI ================= --}}
    <section class="py-5">
        <div class="container">
            <h3 class="mb-4 text-center">Program Studi</h3>

            <div class="row">
                @foreach ($prodis as $prodi)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">

                            {{-- FOTO PRODI --}}
                            @if ($prodi->foto)
                                <img src="{{ asset('storage/' . $prodi->foto) }}" class="card-img-top"
                                    alt="{{ $prodi->nama }}" style="height: 200px; object-fit: cover;">
                            @else
                                <img src="{{ asset('image/default-prodi.jpg') }}" class="card-img-top" alt="Default"
                                    style="height: 200px; object-fit: cover;">
                            @endif

                            <div class="card-body text-center">
                                <h5 class="fw-bold">{{ $prodi->nama }}</h5>
                                <small class="text-muted d-block mb-2">
                                    {{ $prodi->kode }}
                                </small>

                                <p class="text-muted">
                                    {{ Str::limit($prodi->deskripsi, 100) }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- ================= DATA DOSEN ================= --}}
    <section class="py-5">
        <div class="container">
            <h3 class="mb-4 text-center">Kaprodi Politeknik Mitra Global</h3>

            <!-- ROW CENTER -->
            <div class="row justify-content-center g-4">

                <!-- Dosen 1 -->
                <div class="col-6 col-md-2">
                    <div class="card h-100 shadow-sm text-center">
                        <img src="image/lt.png" class="card-img-top" alt="Lulus Triyaningsih, S.Pd, M.M."
                            style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h6 class="card-title mb-1">Lulus Triyaningsih, S.Pd, M.M.</h6>
                            <p class="mb-1 mt-2"><strong>Jabatan:</strong> Kaprodi Akutansi</p>
                            <p class="text-muted mb-0">lulus.t@kampus.ac.id</p>
                        </div>
                    </div>
                </div>

                <!-- Dosen 2 -->
                <div class="col-6 col-md-2">
                    <div class="card h-100 shadow-sm text-center">
                        <img src="image/ib.jpg" class="card-img-top" alt="Ida Bagus Prima Widyanta, S.Kom, M.M."
                            style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h6 class="card-title mb-1">Ida Bagus Prima Widyanta, S.Kom, M.M.</h6>
                            <p class="mb-1 mt-2"><strong>Jabatan:</strong> Kaprodi Teknik Informatika</p>
                            <p class="text-muted mb-0">idabagus.pw@kampus.ac.id</p>
                        </div>
                    </div>
                </div>

                <!-- Dosen 3 -->
                <div class="col-6 col-md-2">
                    <div class="card h-100 shadow-sm text-center">
                        <img src="image/aa.jpg" class="card-img-top" alt="Antonius Ali, S.P., M.P, CLSSGB, IPP."
                            style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h6 class="card-title mb-1">Antonius Ali, S.P., M.P, CLSSGB, IPP.</h6>
                            <p class="mb-1 mt-2"><strong>Jabatan:</strong> Kaprodi Agribisnis</p>
                            <p class="text-muted mb-0">antonius.ali@kampus.ac.id</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= BERITA ================= --}}
    <section id="berita" class="bg-light py-5">
        <div class="container">
            <h3 class="mb-4 text-center">Berita Terbaru</h3>

            <div class="row">
                @forelse ($beritas as $berita)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 shadow-sm">

                            {{-- FOTO BERITA --}}
                            <img src="{{ $berita->foto ? asset('storage/' . $berita->foto) : asset('no-image.png') }}"
                                class="card-img-top" alt="{{ $berita->judul }}"
                                style="height:200px; object-fit:cover;">

                            <div class="card-body">
                                <h6>{{ $berita->judul }}</h6>

                                <small class="text-muted">
                                    {{ $berita->created_at->format('d M Y') }}
                                </small>

                                <p class="mt-2">
                                    {{ Str::limit(strip_tags($berita->konten), 120) }}
                                </p>

                                <a href="{{ route('berita.detail', $berita->slug) }}" class="btn btn-sm btn-primary">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="text-muted">Belum ada berita terbaru.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <style>
        .sponsor-wrapper {
            width: 100%;
            overflow: hidden;
            background: #f8f9fa;
            padding: 25px 0;
        }

        .sponsor-track {
            display: flex;
            gap: 60px;
            width: max-content;
            animation: sponsorLoop 25s linear infinite;
        }

        .sponsor-track img {
            height: 60px;
            object-fit: contain;
        }

        @keyframes sponsorLoop {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }
    </style>

    {{-- ================= SPONSOR DAN MITRA ================= --}}
    <section id="kerjasama" class="py-5 bg-light overflow-hidden">
        <div class="container">
            <h3 class="mb-4 text-center">Sponsor & Mitra</h3>
        </div>

        <div class="sponsor-wrapper">
            <div class="sponsor-track">
                <!-- SET 1 -->
                <img src="image/kemenaker.png">
                <img src="image/ayuprinting.jpg">
                <img src="image/BNI.png">
                <img src="image/kahyangan.jpg">
                <img src="image/fifgrup.jpg">
                <img src="image/elhotel.png">
                <img src="image/mnclogo.png">
                <img src="image/sidomuncul.png">
                <img src="image/BAIK.jpg">

                <!-- SET 2 (DUPLIKAT WAJIB) -->
                <img src="image/kemenaker.png">
                <img src="image/ayuprinting.jpg">
                <img src="image/BNI.png">
                <img src="image/kahyangan.jpg">
                <img src="image/fifgrup.jpg">
                <img src="image/elhotel.png">
                <img src="image/mnclogo.png">
                <img src="image/sidomuncul.png">
                <img src="image/BAIK.jpg">
            </div>
        </div>
    </section>



    {{-- ================= LOKASI & KONTAK ================= --}}
    <section id="kontak" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6 mb-4">
                    <h4 class="fw-bold mb-3">Lokasi Kampus</h4>
                    <div class="ratio ratio-16x9 shadow rounded">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.4812169470288!2d114.23088917477361!3d-8.452494591587609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd3ff18589fe8e1%3A0x876467b0a8d793f3!2sPoliteknik%20Mitra%20Global!5e0!3m2!1sid!2sid!4v1766936811162!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe> style="border:0;" allowfullscreen
                        loading="lazy">
                        </iframe>
                    </div>
                </div>

                <div class="col-md-6">
                    <h4 class="fw-bold mb-3">Kontak Kami</h4>

                    <p>
                        <i class="bi bi-geo-alt-fill text-primary"></i>
                        Jl. Hasanudin No. 8, Cluring, Banyuwangi
                    </p>

                    <p>
                        <i class="bi bi-telephone-fill text-primary"></i>
                        (0333) 391 0698
                    </p>

                    <p>
                        <i class="bi bi-envelope-fill text-primary"></i>
                        politeknikmg@gmail.com
                    </p>

                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success">
                        <i class="bi bi-whatsapp"></i> WhatsApp Kami
                    </a>
                </div>

            </div>
        </div>
    </section>

    {{-- ================= FOOTER ================= --}}
    <footer class="bg-dark text-white pt-5 pb-3">
        <div class="container">
            <div class="row text-start">

                <!-- Tentang -->
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold">Politeknik Mitra Global</h5>
                    <p class="small">
                        Politeknik Mitra Global berkomitmen mencetak lulusan unggul,
                        berdaya saing, dan siap menghadapi dunia industri.
                    </p>
                </div>

                <!-- Navigasi -->
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold">Menu</h5>
                    <ul class="list-unstyled small">
                        <li><a href="/" class="text-white text-decoration-none">Beranda</a></li>
                        <li><a href="#tentang" class="text-white text-decoration-none">Tentang</a></li>
                        <li><a href="#program" class="text-white text-decoration-none">Program Studi</a></li>
                        <li><a href="#kontak" class="text-white text-decoration-none">Kontak</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold">Kontak</h5>
                    <p class="small mb-1">📍 Jl. Hasanudin No. 8, Banyuwangi</p>
                    <p class="small mb-1">📞 (0333) 123456</p>
                    <p class="small mb-1">✉️ info@poltekmg.ac.id</p>
                </div>

            </div>

            <hr class="border-secondary">

            <!-- Copyright -->
            <div class="text-center small">
                © {{ date('Y') }} <strong>Politeknik Mitra Global</strong>. All Rights Reserved.
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
