<?php
   include "koneksi.php";

   if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $idmhs = "";
        $namamhs = $_POST["inputnama"];
        $jurusanmhs = $_POST["inputjurusan"];
        $kampusmhs = $_POST["inputkampus"];

        $sql = "INSERT INTO tb_mahasiswa (id_mhs, nama_mhs, jurusan_mhs, kampus_mhs) VALUES ('$idmhs', '$namamhs', '$jurusanmhs', '$kampusmhs')";

        if ($connect->query($sql) == TRUE)  {
            header("location: index.php");
        } else {
            echo "Error:  ".$sql. "<br>" . $connect->error;
        }
        $connect->close();

    }

?>   