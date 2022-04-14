<?php
if(isset($_GET['id_pegawai'])){
    $id = $_GET['id_pegawai'];

    $query = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id_pegawai='$id'");
    $data = mysqli_fetch_array($query);

    if(mysqli_num_rows($query) == 1){
    ?>
<div class="row">
    <div class="col-md-12">
        <h4>Edit Data Pengguna</h4>
        <form action="index.php?page=dashboard_update" method="post">
            <input type="hidden" name="id_pegawai" value="<?= $id ?>">
            <div class="mb-2">
                <label for="nama_pegawai" class="form-label">Nama</label>
            </div>
            <input type="text" name="nama_pegawai" id="nama_pegawai" class="form-control" placeholder="Masukkan Nama"
                value="<?= $data['nama_pegawai']?>">
            <div class="mb-2">
                <label for="username" class="form-label">Username</label>
            </div>
            <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username"       value="<?= $data['username']?>">
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
            </div>
            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password"  value="<?= $data['password']?>">
            <div class="mb-2">
                <label for="jk_pegawai" class="form-label">Jenis Kelamin</label>
            </div>
            <input type="text" name="jk_pegawai" id="jk_pegawai" class="form-control" placeholder="Masukkan Jenis Kelamin" value="<?= $data['jk_pegawai']?>">
            <div class="mb-2">
                <label for="no_telp" class="form-label">Nomor Telepon</label>
            </div>
            <input type="tel" name="no_telp" id="no_telp" class="form-control" placeholder="Masukkan Nomor Telepon"
                value="<?= $data['no_telp']?>">
            <div class="mb-2">
                <label for="alamat" class="form-label">Alamat</label>
            </div>
            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat"
                value="<?= $data['alamat']?>">
            <input type="submit" value="Edit" name="edit" class="btn btn-secondary">
        </form>
    </div>
</div>
<?php
    }else{
        header("Location:index.php?page=dashboard");    
    }
}else{
    header("Location:index.php?page=dashboard");
}
?>