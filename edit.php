<?php
    include "koneksi.php";

    // ambil id dari index
    $idmhs = $_GET['id'];

    // query ambil data
    $sql = "SELECT * FROM tb_mahasiswa where id_mhs = $idmhs";
    $query = mysqli_query($connect, $sql);
    $VALUE = mysqli_fetch_assoc($query);

    // jika data tidak di temukan
    if(mysqli_num_rows($query) < 1) {
        die("data tidak ditemukan...");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
        <h3>ubah data</h3>
            <form action="edit-proses.php" method="post">
                <!-- input id -->
                <input type="hidden" name="inputid" value="<?php echo $VALUE['id_mhs'] ?>">
                <!-- input nama -->
                 <div class="mb-3">
                    <label for="inputnama" class="form-label">nama</label>
                    <input type="text" class="form-control" id="inputnama" name="inputnama" placeholder="masukan nama lengkap..." value="<?php echo $VALUE['nama_mhs'] ?>">
                 </div>
                      <!-- input jurusan -->
                      <div class="mb-3">
                    <label for="inputjurusan" class="form-label">jurusan</label>
                    <input type="text" class="form-control" id="inputjurusan" name="inputjurusan" placeholder="masukan jurusan lengkap..." value="<?php echo $VALUE['jurusan_mhs'] ?>">
                 </div>
                      <!-- input kampus -->
                      <div class="mb-3">
                    <label for="inputkampus" class="form-label">kampus</label>
                    <input type="text" class="form-control" id="inputkampus" name="inputkampus" placeholder="masukan nama kampus..." value="<?php echo $VALUE['kampus_mhs'] ?>">
                 </div>
                 <button type="submit" class="btn btn-primary">tambah</button>
            </form>



            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>