@extends('layout.layout')
@section('content')

<div class="card mb-3 col-lg-10 mx-auto mt-3 " >
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/daftar.png" class="img-fluid rounded-start" alt="..." style="height: 90vh;">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <div class="card-text">
              <h4 class="text-center fw-bold mt-3">ASPERA</h4>
              <p class="text-center text-secondary">Memulai dengan mudah</p>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
              <div class="mt-3">
                  <form action="{{ route('register') }}" method="post">
                    @csrf
                      <div class=" col-lg-12 mx-auto">
                          <div class="row mx-auto">
                              <div class="col-lg-8 mx-auto">
                                  <label for="nama" class="form-text">Nama Lengkap</label>
                                  <input type="text" :value="old('name')" name="name" id="nama" class="form-control" placeholder="Masukan Nama Lengkap" required>
                              </div>
                              {{-- <div class="col-lg-6">
                                  <label for="nik" class="form-text">Nomor Induk Kependudukan (NIK)</label>
                                  <input type="number" :value="old('nik')" name="nik" id="nik" class="form-control col-lg-5" placeholder="Masukan Nomor Induk Kependudukan" required>
                              </div>
                              <div class="col-lg-6 my-2">
                                  <label for="tglahir" class="form-text">Tanggal Lahir</label>
                                  <input type="date" :value="old('tglahir')" name="tglahir" id="tglahir" class="form-control col-lg-5" placeholder="Masukan Nomor Induk Kependudukan" required>
                              </div>
                              <div class="col-lg-6 my-2">
                                  <label for="jk" class="form-text">Jenis Kelamin</label>
                                  <select name="jk" id="jk" :value="old('jk')" class="form-select">
                                      <option selected>Pilih jenis kelamin</option>
                                      <option value="Laki - laki">Laki - laki</option>
                                      <option value="Perempuan">Perempuan</option>
                                  </select>
                              </div>
                              <div class="col-lg-6">
                                  <label for="notelp" class="form-text">Nomor Telepon Aktif</label>
                                  <input type="number" :value="old('notelp')" name="notelp" id="notelp" class="form-control col-lg-5" placeholder="Masukan Nomor Telepon" required>
                              </div>
                              <div class="col-lg-6">
                                  <label for="pekerjaan" class="form-text">Pekerjaan</label>
                                  <input type="text" :value="old('pekerjaan')" name="pekerjaan" id="pekerjaan" class="form-control col-lg-5" placeholder="Masukan Pekerjaan" required>
                              </div>
                              <div class="col-lg-6 my-2">
                                  <label for="username" class="form-text">Nama Pengguna</label>
                                  <input type="text" :value="old('username')" name="username" id="username" class="form-control" placeholder="Masukan Nama Pengguna" required>
                              </div> --}}
                              <div class="col-lg-8 mx-auto my-2">
                                  <label for="email" class="form-text">Masukan Email Pengguna</label>
                                  <input type="email" :value="old('email')" name="email" id="email" class="form-control" placeholder="Masukan Email Aktif" required>
                              </div>
                              <div class="col-lg-8 mx-auto">
                                  <label for="password" class="form-text">Masukan Kata Sandi</label>
                                  <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Kata Sandi" required>
                              </div>
                              <div class="col-lg-8 mx-auto">
                                  <label for="password" class="form-text">Ulang Kata Sandi</label>
                                  <input type="password" name="password_confirmation" id="password" class="form-control" placeholder="Ulang Kata Sandi" required>
                              </div>
                              <div class="form-check col-lg-7 mx-auto mt-4">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    Data yang dimasukan sudah sesuai dengan data diri
                                  </label>
                                </div>
                              <button value="submit" name="submit" class="col-lg-6 mx-auto btn btn-primary mt-3">Buat Akun</button>
                          </div>
                      </div>
                  </form>
              </div>
              <p class=" text-center fw-semibold">Sudah mempunyai akun?<a href="{{ route('login') }}" class="mx-1 text-decoration-none">Masuk</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
