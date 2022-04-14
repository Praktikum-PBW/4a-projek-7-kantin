<?php
if (isset($_GET['id_pegawai'])){
    $id = $_GET['id_pegawai'];

    $query = mysqli_query($koneksi, "DELETE FROM pegawai WHERE id_pegawai='$id'");

    if($query){
        header("Location: index.php?page=dashboard");
    }else{
        echo "gagal";
    }
}
?>