
  <!-- Modal -->
  <div class="modal fade" id="modal-pengguna" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pengguna</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5>Identitas diri</h5>
          <form action="" method="post">
            <label for="nama" class="form-text">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Lengkap" required>
            <div class="row">
                <div class="col-lg-6 form-text">
                    <label for="kelamin">Jenis Kelamin</label>
                    <select name="jk" id="kelamin" class="form-select">
                        <option value="Laki - Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <label for="telp" class="form-text">No telepon aktif</label>
                    <input type="number" name="notelp" id="telp" class="form-control" placeholder="Masukan No Telepon" required>
                </div>
            </div>
            <h5 class="mt-2">Akun</h5>
            <div class="row">
                <div class="col-lg-6">
                    <label for="username" class="form-text">Nama Pengguna</label>
                    <input type="text" name="username" id="username" placeholder="Masukan Nama Pengguna" class="form-control" required>
                </div>
                 <div class="col-lg-6">
                    <label for="email" class="form-text">E-Mail Aktif</label>
                    <input type="email" name="email" id="email" placeholder="Masukan Email Aktif" class="form-control" required>
                </div>
                <div class="col-lg-6">
                    <label for="pass" class="form-text">Kata Sandi</label>
                    <input type="password" name="password" id="pass" placeholder="Masukan Kata Sandi" class="form-control" required>
                </div>
                <div class="col-lg-6">
                    <label for="ulang" class="form-text">Ulang Kata Sandi</label>
                    <input type="password" name="password" id="ulang" placeholder="Ulang Kata Sandi" class="form-control" required>
                </div>
                <div class="col-lg-6">
                    <label for="role" class="form-text">Peran</label>
                    <select name="" id="" class="form-select">
                        <option value="Admin">Admin</option>
                        <option value="Petugas">Petugas</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
