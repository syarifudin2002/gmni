<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-danger">
    <div class="container">
        <a class="navbar-brand" href="#">GMNI MATARAM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request()->is('/') ? 'active' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request()->is('berita') ? 'active' : '' }}" href="/berita">Berita</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ Request()->is('artikel') ? 'active' : '' }}" href="/artikel">Artikel</a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Daftar Komisariat
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/komsatunram">Komisariat UNRAM</a></li>
                        <li><a class="dropdown-item" href="/komsatbungkarno">Komisariat Bung Karno</a></li>
                        <li><a class="dropdown-item" href="/komsatfstt">Komisariat FSTT</a></li>
                        <li><a class="dropdown-item" href="/komsattrisakti">Komisariat Trisakti</a></li>
                        <li>
                      </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tentang">Tentang</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>
                                    Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                        Logout</button>
                                </form>
                        </ul>
                    </li>
                @else
                    <div class="nav-item">
                        <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                    </div>
                @endauth
            </ul>
        </div>
    </div>
</nav>
