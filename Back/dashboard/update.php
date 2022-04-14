<?php
if(isset($_POST['edit'])){
    $id = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id_pegawai']))));
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_pegawai']))));
    $username = htmlentities(htmlspecialchars(strip_tags(trim($_POST['username']))));
    $password = htmlentities(htmlspecialchars(strip_tags(trim($_POST['password']))));
    $jk = htmlentities(htmlspecialchars(strip_tags(trim($_POST['jk_pegawai']))));
    $telp = htmlentities(htmlspecialchars(strip_tags(trim($_POST['no_telp']))));
    $alamat = htmlentities(htmlspecialchars(strip_tags(trim($_POST['alamat']))));

    $query = mysqli_query($koneksi, "UPDATE pegawai SET nama_pegawai='$nama',username='$username', password='$password',  jk_pegawai='$jk', no_telp='$telp'  alamat='$alamat' WHERE id_pegawai='$id'");

    if($query){
        header("Location: index.php?page=dashboard");
    }else{
        echo "gagal";
    }
}
?>