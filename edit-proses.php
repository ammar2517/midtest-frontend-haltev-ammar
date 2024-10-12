<?php
    include "koneksi.php";

    $idmhs = $_POST['inputid'];
    $namamhs = $_POST['inputnama'];
    $jurusanmhs = $_POST['inputjurusan'];
    $kampusmhs = $_POST['inputkampus'];

    $sql = "UPDATE tb_mahasiswa SET nama_mhs='$namamhs', jurusan_mhs='$jurusanmhs', kampus_mhs='$kampusmhs' WHERE id_mhs = '$idmhs'";

    $update = mysqli_query($connect, $sql);

    if($update) {
        header("location: index.php");
    } else {
        die("gagal menyimpan perubahan...");
    }


?>