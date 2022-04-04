<dic class="row">
    <div class="col-md-12">
        <h4>Tambah Data Pengguna</h4>
        <form action="index.php?page=dashboard_store" method="post">
            <div class="mb-2">
                <label for="nama_pegawai" class="form-label">Nama</label>
            </div>
            <input type="text" name="nama_pegawai" id="nama_pegawai" class="form-control" placeholder="Masukkan Nama">
            <div class="mb-2">
                <label for="username" class="form-label">Username</label>
            </div>
            <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username">
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
            </div>
            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password">
            <div class="mb-2">
                <label for="jk_pegawai" class="form-label">Jenis Kelamin</label>
            </div>
            <input type="text" name="jk_pegawai" id="jk_pegawai" class="form-control" placeholder="Masukkan Jenis Kelamin">
            <div class="mb-2">
                <label for="no_telp" class="form-label">Nomor Telepon</label>
            </div>
            <input type="tel" name="no_telp" id="no_telp" class="form-control" placeholder="Masukkan Nomor Telepon">
            <div class="mb-2">
                <label for="alamat" class="form-label">Alamat</label>
            </div>
            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat">
            <br>
            <input type="submit" value="Tambah" name="tambah" class="btn btn-secondary">
        </form>
    </div>
</dic>