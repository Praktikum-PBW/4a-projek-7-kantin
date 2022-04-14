<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Data User</h4>
            <a href="index.php?page=dashboard_create" class="btn btn-secondary">Tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table" style="text-align: center;">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Telepon</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM pegawai");
                    $no = 1;
                    foreach ($query as $data){
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['nama_pegawai']?></td>
                        <td><?= $data['username']?></td>
                        <td><?= $data['jk_pegawai']?></td>
                        <td><?= $data['no_telp']?></td>
                        <td><?= $data['alamat']?></td>
                        <td>
                            <div class="btn-group">
                                <a href="index.php?page=dashboard_edit&id_pegawai=<?= $data['id_pegawai']?>"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <a href="index.php?page=dashboard_delete&id_pegawai=<?= $data['id_pegawai']?>"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah anda yakin?')">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>