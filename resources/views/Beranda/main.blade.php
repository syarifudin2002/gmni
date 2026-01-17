@extends('Beranda.layouts.main')

@section('container')
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/image/soekarnoo.png" class="d-block w-100" alt="GMNI Mataram"
                    style="height: 105vh; object-fit: cover;">
                <div class="container">
                    <div class="carousel-caption text-start text-white">
                        <h1>Marhaenisme sebagai Jalan Perjuangan.</h1>
                        <p class="opacity-75">
                            Meneguhkan nilai nasionalisme, kerakyatan, dan keadilan sosial dalam setiap langkah kader GMNI.
                        </p>
                        <p>
                            <a class="btn btn-lg btn-danger" href="/login">Daftar Sekarang</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/image/merdeka.png" class="d-block w-100" alt="GMNI Mataram"
                    style="height: 100vh; object-fit: cover;
                <div class="container">
                <div class="carousel-caption text-white">
                    <h1>Kader Progresif dan Berkarakter.</h1>
                    <p>
                        GMNI hadir sebagai ruang pembentukan intelektual, militansi, dan kepemimpinan mahasiswa yang
                        berpihak pada rakyat.
                    </p>
                    <p><a class="btn btn-lg btn-danger" href="#">Daftar Sekarang</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/image/fotbargmni.jpeg" class="d-block w-100" alt="GMNI Mataram"
                    style="height: 100vh; object-fit: cover;">
                <div class="carousel-caption text-white">
                    <h1>Bergerak, Berpikir, dan Mengabdi untuk Indonesia.</h1>
                    <p>
                        Dari kampus hingga masyarakat, GMNI berkomitmen mengambil peran nyata dalam perjuangan sosial dan
                        kebangsaan.
                    </p>
                    <p><a class="btn btn-lg btn-danger" href="/login">Daftar Sekarang</a></p>
                </div>
            </div>
        </div>
    </div>
    <div>
</div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    
   
    <div class="container mb-5 text-center">
        <h2>PROFIL GMNI KOTA MATARAM</h2>
        @include('Beranda.profilcabang')
        <hr class="featurette-divider mt-2 mb-5" />
    </div>

     <div class="container mb-5 text-center">
        <h2>PIMPINAN PUSAT GMNI</h2>
        @include('Beranda.penguruspusat')
        <hr class="featurette-divider mt-2 mb-5" />
    </div>
    
    <div class="container mb-5" style="text-align: center">
        <h2>DAFTAR PENGURUS CABANG</h2>
        <div class="container mt-5">
            @include('Beranda.pengurus')
        </div>
    </div>
    <hr class="featurette-divider mt-2 mb-5" />
    <div class="container text-center">
        <h2>DAFTAR KOMISARIAT</h2>
    </div>
    </div>
    <!-- Marketing messaging and featurettes
                  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        @include('Beranda.daftarkomsat')
        <!-- /.row -->
          <hr class="featurette-divider mt-2 mb-5" />
    </div>
    <div class="container text-center ">
        <h2 class="mb-5">GALERI GMNI</h2>
        @include('Beranda.galerigmni')
    </div>
    <!-- /.container -->
  
@endsection
