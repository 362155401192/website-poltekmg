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
                {{-- <a href="{{ url('/login') }}" class="text-white me-3" title="Login">
                    <i class="bi bi-box-arrow-in-right"></i>
                </a> --}}
            </div>
        </div>
    </div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('image/logo.png') }}" height="45" class="me-2">
                <strong>POLITEKNIK<br>MITRA GLOBAL</strong>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav mx-auto gap-lg-3 text-center text-lg-start">
                    <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Tentang Kami</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('visi.misi') }}">Visi & Misi</a></li>
                            <li><a class="dropdown-item" href="{{ route('sejarah') }}">Sejarah</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" data-bs-toggle="dropdown">Program Studi</a>
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

                    <li class="nav-item"><a class="nav-link active" href="#berita">Artikel Berita</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#kerjasama">Mitra Kerjasama</a></li>
                </ul>

                <a href="https://docs.google.com/forms/..." target="_blank"
                   class="btn btn-primary fw-semibold px-4 mt-2 mt-lg-0">
                    Pendaftaran
                </a>
            </div>
        </div>
    </nav>
</header>
