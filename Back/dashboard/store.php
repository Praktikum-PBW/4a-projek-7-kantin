<?php
if(isset($_POST['tambah'])){
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_pegawai']))));
    $username = htmlentities(htmlspecialchars(strip_tags(trim($_POST['username']))));
    $password = htmlentities(htmlspecialchars(strip_tags(trim($_POST['password']))));
    $jk = htmlentities(htmlspecialchars(strip_tags(trim($_POST['jk_pegawai']))));
    $telp = htmlentities(htmlspecialchars(strip_tags(trim($_POST['no_telp']))));
    $alamat = htmlentities(htmlspecialchars(strip_tags(trim($_POST['alamat']))));
    

    $query = mysqli_query($koneksi, "INSERT INTO pegawai VALUES(null,'$nama','$username', '$password','$jk','$telp','$alamat')");

    if($query){
        header("Location: index.php?page=dashboard");
    }else{
        echo "gagal";
    }
}
?>