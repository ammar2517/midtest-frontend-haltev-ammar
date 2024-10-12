<?php
    include "koneksi.php";

    // ambil dari index
    $idmhs = $_GET["id"];


    // query hapus
    $query = "DELETE FROM tb_mahasiswa WHERE id_mhs=$idmhs";
    $hapus = mysqli_query($connect, $query);


    // apakah hapus berhasil
    if($hapus)  {
        header("location: index.php");
    } else {
        die("gagal menghapus data.");
    }

    $connect->close();

?>