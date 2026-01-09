<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Politeknik Mitra Global</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('resource/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Lightbox CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">

    <!-- Lightbox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>


    <style>
        /* HEADER FIXED */
        #headerMain {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 9999;
            transition: transform 0.4s ease, box-shadow 0.3s ease;
        }
        .header-hide { transform: translateY(-100%); }
        .header-show { transform: translateY(0); box-shadow: 0 6px 18px rgba(0,0,0,0.08); }
        body { padding-top: 130px; }

        /* HERO */
        .hero-section {
            background: url("{{ asset('image/wisuda.jpg') }}") center center / cover no-repeat;
            min-height: 75vh;
            position: relative;
        }

        .hero-overlay {
            background: rgba(0, 0, 0, 0.25); /* Ubah dari 0.55 menjadi 0.25 */
            padding: 200px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }

        .hero-overlay h1, 
        .hero-overlay p, 
        .hero-overlay .btn {
            color: white;
        }

        /* TEKS & KONTEN */
        h2, h3 { font-weight: 700; }
        p, li, small { font-size: 1rem; line-height: 1.7; }
        .card-body p { font-size: 0.95rem; }
        .text-center img { max-width: 100%; }

        /* SPONSOR */
        .sponsor-wrapper { width: 100%; overflow: hidden; background: #f8f9fa; padding: 25px 0; }
        .sponsor-track { display: flex; gap: 60px; width: max-content; animation: sponsorLoop 25s linear infinite; }
        .sponsor-track img { height: 50px; object-fit: contain; }
        @keyframes sponsorLoop { 0% {transform: translateX(0);} 100% {transform: translateX(-50%);} }

        /* PROGRAM STUDI CARD */
        .prodi-card {
            border-radius: 16px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .prodi-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.12);
        }

        /* GAMBAR */
        .prodi-img-wrapper {
            height: 220px;
            overflow: hidden;
        }

        .prodi-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .prodi-card:hover img {
            transform: scale(1.08);
        }

        /* BERITA CARD */
        .berita-card {
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.08);
            transition: all .3s ease;
        }

        .berita-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        }

        /* IMAGE */
        .berita-img-wrapper {
            position: relative;
            height: 200px;
            overflow: hidden;
        }

        .berita-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .4s ease;
        }

        .berita-card:hover img {
            transform: scale(1.1);
        }

        /* DATE BADGE */
        .berita-date {
            position: absolute;
            bottom: 12px;
            left: 12px;
            background: rgba(0,0,0,.7);
            color: #fff;
            font-size: 12px;
            padding: 6px 10px;
            border-radius: 8px;
        }

        /* TITLE */
        .berita-title {
            font-size: 16px;
            line-height: 1.4;
            margin-bottom: 8px;
        }

        /* GALLERY */
        .gallery-item {
            position: relative;
        }

        .gallery-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 600;
            opacity: 0;
            transition: 0.3s;
            border-radius: 8px;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }



    </style>
</head>

<body>

<!-- HEADER -->
<header id="headerMain">
    <!-- TOP BAR -->
    <div class="bg-primary text-white py-2 small">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
            <div>
                <i class="bi bi-telephone"></i> (0333) 391 0698
                &nbsp;&nbsp;
                <i class="bi bi-envelope"></i> politeknikmg@gmail.com
            </div>
            <div class="mt-2 mt-md-0">
                <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-youtube"></i></a>
                {{-- <a href="{{ url('/login') }}" class="text-white me-3" title="Login"><i class="bi bi-box-arrow-in-right"></i></a> --}}
            </div>
        </div>
    </div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center">
                <img src="{{ asset('image/logo.png') }}" height="45" class="me-2" alt="Logo">
                <strong>POLITEKNIK<br>MITRA GLOBAL</strong>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav mx-auto gap-lg-3 flex-column flex-lg-row text-center text-lg-start">
                    <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown">
                            Tentang Kami
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('visi.misi') }}">Visi & Misi</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('sejarah') }}">Sejarah</a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" data-bs-toggle="dropdown" href="#">Program Studi</a>
                        <ul class="dropdown-menu">
                            @foreach ($prodis as $prodi)
                                <li>
                                    <a class="dropdown-item" href="{{ route('prodi.detail', $prodi->slug) }}">
                                        {{ $prodi->nama }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/#berita') }}">
                            Artikel Berita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/#kerjasama') }}">
                            Mitra Kerjasama
                        </a>
                    </li>

                </ul>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSedZeRdjNqHiqwzjlP6SfhMsz3JLrJkZfoEUkBM03KDPOWHJQ/viewform" target="_blank" class="btn btn-primary text-white fw-semibold px-4 mt-2 mt-lg-0">
                    Pendaftaran
                </a>
            </div>
        </div>
    </nav>
</header>

<!-- HERO -->
<section class="hero-section text-white text-center d-flex align-items-center">
    <div class="hero-overlay w-100">
        <div class="container">
            <h1 class="fw-bold display-5">Politeknik Mitra Global</h1>
            <p class="lead mt-3">Website resmi informasi akademik dan kegiatan kampus</p>
            <a href="#tentang-kami" class="btn btn-warning mt-4 px-4 fw-semibold">Selengkapnya</a>
        </div>
    </div>
</section>

<!-- TENTANG KAMI -->
<section id="tentang-kami" class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-4">

            <!-- TEKS -->
            <div class="col-md-6">
                <span class="text-primary fw-semibold text-uppercase small">
                    Profil Institusi
                </span>

                <h2 class="fw-bold mt-2 mb-3">
                    Politeknik Mitra Global
                </h2>

                <p class="text-muted">
                    <strong>Politeknik Mitra Global</strong> merupakan perguruan tinggi vokasi
                    yang berfokus pada pengembangan keterampilan praktis dan
                    kompetensi mahasiswa agar siap bersaing di dunia industri.
                </p>

                <ul class="list-unstyled mt-3">
                    <li class="mb-2">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i>
                        Pendidikan berbasis praktik & industri
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i>
                        Dosen profesional & berpengalaman
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i>
                        Kerja sama industri & program magang
                    </li>
                </ul>

                <button
                    class="btn btn-primary mt-3 px-4"
                    data-bs-toggle="modal"
                    data-bs-target="#modalTentangKami">
                    Selengkapnya
                </button>
            </div>

            <!-- GAMBAR -->
            <div class="col-md-6 text-center">
                <img src="image/pmg1.jpeg"
                     alt="Politeknik Mitra Global"
                     class="img-fluid rounded-4 shadow"
                     style="max-height:280px; object-fit:cover;">
            </div>

        </div>
    </div>
</section>


<!-- MODAL TENTANG KAMI -->
<div class="modal fade" id="modalTentangKami" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 border-0 shadow">

            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold">
                    Tentang Politeknik Mitra Global
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <div class="row g-4 align-items-center">

                    <div class="col-md-5 text-center">
                        <img src="image/pmg1.jpeg"
                             alt="Politeknik Mitra Global"
                             class="img-fluid rounded-4 shadow-sm">
                    </div>

                    <div class="col-md-7">
                        <p>
                            <strong>Politeknik Mitra Global</strong> adalah institusi
                            pendidikan tinggi vokasi yang menekankan pembelajaran
                            berbasis praktik dan kebutuhan industri.
                        </p>

                        <p>
                            Dengan dukungan tenaga pengajar profesional, kurikulum adaptif,
                            serta jejaring industri yang luas, Politeknik Mitra Global
                            berkomitmen mencetak lulusan yang kompeten, inovatif,
                            dan siap kerja.
                        </p>

                        <ul class="mt-3">
                            <li>Fokus keterampilan terapan</li>
                            <li>Program magang industri</li>
                            <li>Link & match dunia kerja</li>
                            <li>Pembinaan karier mahasiswa</li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="modal-footer border-0">
                <button class="btn btn-secondary px-4" data-bs-dismiss="modal">
                    Tutup
                </button>
            </div>

        </div>
    </div>
</div>


<!-- PROGRAM STUDI -->
<section class="py-5 bg-light" id="program-studi">
    <div class="container">

        <!-- JUDUL -->
        <div class="text-center mb-5">
            <span class="text-primary fw-semibold text-uppercase small">
                Akademik
            </span>
            <h2 class="fw-bold mt-2">Program Studi</h2>
            <p class="text-muted">
                Pilihan program studi unggulan yang dirancang sesuai kebutuhan industri
            </p>
        </div>

        <div class="row g-4">

            @foreach ($prodis as $prodi)
                <div class="col-12 col-sm-6 col-lg-4">

                    <div class="card prodi-card h-100 border-0 shadow-sm">

                        <!-- GAMBAR -->
                        <div class="prodi-img-wrapper">
                            <img src="{{ $prodi->foto ? asset('storage/' . $prodi->foto) : asset('image/default-prodi.jpg') }}"
                                 alt="{{ $prodi->nama }}"
                                 class="img-fluid">
                        </div>

                        <!-- KONTEN -->
                        <div class="card-body text-center d-flex flex-column">

                            <h5 class="fw-bold mb-1">
                                {{ $prodi->nama }}
                            </h5>

                            <small class="text-primary fw-semibold mb-2">
                                {{ $prodi->kode }}
                            </small>

                            <p class="text-muted small flex-grow-1">
                                {{ Str::limit($prodi->deskripsi, 110) }}
                            </p>

                            <a href="{{ route('prodi.detail', $prodi->slug) }}"
                               class="btn btn-outline-primary btn-sm mt-2 px-4">
                                Detail Program
                            </a>

                        </div>

                    </div>

                </div>
            @endforeach

        </div>
    </div>
</section>


<!-- DATA DOSEN -->
<section class="py-5 bg-light">
    <div class="container">
        <h3 class="mb-4 text-center">Pegawai Politeknik Mitra Global</h3>
        <div class="row justify-content-center g-4">
            @forelse ($pegawais as $pegawai)
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="card h-100 shadow-sm text-center">
                        <img src="{{ $pegawai->foto ? asset('storage/' . $pegawai->foto) : asset('image/default-dosen.jpg') }}"
                             class="card-img-top img-fluid" style="height:220px; object-fit:cover;" alt="{{ $pegawai->nama }}">
                        <div class="card-body p-3">
                            <h6 class="card-title mb-1">{{ $pegawai->nama }}</h6>
                            <p class="mb-1 small"><strong>NIDN:</strong> {{ $pegawai->nidn }}</p>
                            <p class="mb-1 small"><strong>Jabatan:</strong> {{ $pegawai->jabatan }}</p>
                            <p class="mb-1 small"><strong>No. HP:</strong> <a href="https://wa.me/62{{ ltrim($pegawai->nohp,'0') }}" target="_blank" class="text-decoration-none">{{ $pegawai->nohp }}</a></p>
                            <p class="text-muted small mb-0">{{ $pegawai->email }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center"><p class="text-muted">Data pegawai belum tersedia</p></div>
            @endforelse
        </div>
    </div>
</section>

<!-- BERITA -->
<section id="berita" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold">Berita Terbaru</h3>
            <p class="text-muted">Informasi dan kegiatan terbaru kampus</p>
        </div>

        <div class="row g-4">
            @forelse ($beritas as $berita)
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card berita-card h-100 border-0">
                        <div class="berita-img-wrapper">
                            <img src="{{ $berita->foto ? asset('storage/' . $berita->foto) : asset('no-image.png') }}"
                                 alt="{{ $berita->judul }}">
                            <span class="berita-date">
                                {{ $berita->created_at->format('d M Y') }}
                            </span>
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h6 class="fw-semibold berita-title">
                                {{ $berita->judul }}
                            </h6>

                            <p class="text-muted small flex-grow-1">
                                {{ Str::limit(strip_tags($berita->konten), 120) }}
                            </p>

                            <a href="{{ route('berita.detail', $berita->slug) }}"
                               class="btn btn-outline-primary btn-sm align-self-start">
                                Baca Selengkapnya →
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

<!-- GALLERY -->
<section id="gallery" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold">Galeri Kegiatan</h3>
            <p class="text-muted">Dokumentasi kegiatan dan momen kampus</p>
        </div>

        <div class="row g-3">
            @forelse ($galleries as $gallery)
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="{{ asset('storage/' . $gallery->foto) }}"
                       class="gallery-item d-block text-decoration-none"
                       data-lightbox="kampus-gallery"
                       data-title="{{ $gallery->judul }}">

                        <div class="position-relative">
                            <img src="{{ asset('storage/' . $gallery->foto) }}"
                                 alt="{{ $gallery->judul }}"
                                 class="img-fluid rounded">

                            <div class="gallery-overlay">
                                <span>🔍 Lihat</span>
                            </div>
                        </div>

                        <!-- JUDUL -->
                        <div class="mt-2 text-center fw-semibold text-dark">
                            {{ $gallery->judul }}
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted">Belum ada foto di galeri.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>




<!-- MITRA/SPONSOR -->
<section id="kerjasama" class="py-5 bg-light overflow-hidden">
    <div class="container mb-4">
        <h3 class="text-center mb-4">Sponsor & Mitra</h3>
    </div>
    <div class="sponsor-wrapper">
        <div class="sponsor-track">
            <img src="image/kemenaker.png">
            <img src="image/ayuprinting.jpg">
            <img src="image/BNI.png">
            <img src="image/kahyangan.jpg">
            <img src="image/fifgrup.jpg">
            <img src="image/elhotel.png">
            <img src="image/mnclogo.png">
            <img src="image/sidomuncul.png">
            <img src="image/BAIK.jpg">
            <!-- duplicate -->
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

<!-- LOKASI & KONTAK -->
<section id="kontak" class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <h4 class="fw-bold mb-3">Lokasi Kampus</h4>
                <div class="ratio ratio-16x9 shadow rounded">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.4812169470288!2d114.23088917477361!3d-8.452494591587609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd3ff18589fe8e1%3A0x876467b0a8d793f3!2sPoliteknik%20Mitra%20Global!5e0!3m2!1sid!2sid!4v1766936811162!5m2!1sid!2sid"
                     allowfullscreen loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="fw-bold mb-3">Kontak Kami</h4>
                <p><i class="bi bi-geo-alt-fill text-primary"></i> Jl. Hasanudin No. 8, Cluring, Banyuwangi</p>
                <p><i class="bi bi-telephone-fill text-primary"></i> (0333) 391 0698</p>
                <p><i class="bi bi-envelope-fill text-primary"></i> politeknikmg@gmail.com</p>
                <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success"><i class="bi bi-whatsapp"></i> WhatsApp Kami</a>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-dark text-white pt-5 pb-3">
    <div class="container">
        <div class="row text-start">
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold">Politeknik Mitra Global</h5>
                <p class="small">Politeknik Mitra Global berkomitmen mencetak lulusan unggul, berdaya saing, dan siap menghadapi dunia industri.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold">Menu</h5>
                <ul class="list-unstyled small">
                    <li><a href="/" class="text-white text-decoration-none">Beranda</a></li>
                    <li><a href="#tentang-kami" class="text-white text-decoration-none">Tentang</a></li>
                    <li><a href="#program-studi" class="text-white text-decoration-none">Program Studi</a></li>
                    <li><a href="#kontak" class="text-white text-decoration-none">Kontak</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold">Kontak</h5>
                <p class="small mb-1">📍 Jl. Hasanudin No. 8, Banyuwangi</p>
                <p class="small mb-1">📞 (0333) 123456</p>
                <p class="small mb-1">✉️ info@poltekmg.ac.id</p>
            </div>
        </div>
        <hr class="border-secondary">
        <div class="text-center small">&copy; {{ date('Y') }} <strong>Politeknik Mitra Global</strong>. All Rights Reserved.</div>
    </div>
</footer>

<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    let lastScrollTop = 0;
    const header = document.getElementById("headerMain");
    window.addEventListener("scroll", function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop && scrollTop > 120) {
            header.classList.remove("header-show");
            header.classList.add("header-hide");
        } else {
            header.classList.remove("header-hide");
            header.classList.add("header-show");
        }
        lastScrollTop = scrollTop;
    });
</script>

</body>
</html>
