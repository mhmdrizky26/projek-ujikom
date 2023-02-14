<nav class="navbar navbar-expand-lg bg-body-light">
    <div class="container-fluid p-0 container col-10">
      <a class="navbar-brand p-0" href="#">
        <img src="img/logo.png" class="" alt="" width="50">
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav col-lg-12">
          <li class="nav-item">
            <a class="nav-link active fw-semibold" aria-current="page" href="#">Tentang Aspera</a>
          </li>
          <li class="nav-item col-lg-8 me-5">
            <a class="nav-link fw-semibold" href="#">Pengaduan</a>
          </li>
          <!-- Button trigger modal -->
{{-- <button type="button" class="btn fw-semibold" data-bs-toggle="modal" data-bs-target="#loginModal">
    Masuk
  </button>
@include('layout.masuk')
          <a href="/daftar" class="btn btn-primary fw-semibold">Daftar</a> --}}
          @if (Route::has('login'))
          <div class="hidden fixed top-0 right-0 px-6 sm:block">
              @auth
                  <a href="{{ url('/pengaduan') }}" class="btn fw-semibold">Data Laporan</a>
              @else
                  <a href="{{ route('login') }}" class="btn fw-semibold">Masuk</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="btn btn-primary">Daftar</a>
                  @endif
              @endauth
          </div>
         @endif
        </ul>
      </div>
    </div>
  </nav>
